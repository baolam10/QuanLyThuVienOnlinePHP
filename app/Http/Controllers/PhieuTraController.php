<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PhieuTraRequest;
use Illuminate\Support\Facades\Auth;
use App\PHIEUTRA;
use App\PHIEUMUON;
use App\SACH;
use App\Chitietphieumuon;
use DB;
use App\ChiTietPhieuTra;
use Session;

class PhieuTraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listPhieuTra = PHIEUTRA::all();
        return view('Trang_Admin.PHIEU.Phieu_tra', compact('listPhieuTra'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        $PhieuMuon = PHIEUMUON::where('MA_PHIEU_MUON','like', $req->MA_PHIEU_MUON)->first();
        //dd($PhieuMuon);
        $listPhieuTra = PHIEUTRA::all();
        if($PhieuMuon == null){
            Session::flash('session_err','Không tồn tại');
            return view('Trang_Admin.PHIEU.Phieu_tra',compact('listPhieuTra'));
        }
        $DetailPM = Chitietphieumuon::where('MA_PHIEU_MUON','like', $req->MA_PHIEU_MUON)->get();
        //dd($DetailPM);                                
        return view ('Trang_Admin.PHIEU.Them_moi_phieu_tra',compact('PhieuMuon','DetailPM'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PhieuTraRequest $request)
    {
        $DANHSACH = new PHIEUTRA;
        $num = PHIEUTRA::all(); 
        $DANHSACH->MA_PHIEU_TRA = 'PHIEUTRA_'.count($num); 
        $DANHSACH->MA_PHIEU_MUON = $request->MA_PHIEU_MUON; 
        $DANHSACH->MA_NHAN_VIEN = Auth::user()->MA_NHAN_VIEN; 
        $DANHSACH->NGAY_TRA = $request->NGAY_TRA;
        
        $DetailPM = Chitietphieumuon::where('MA_PHIEU_MUON','like', $request->MA_PHIEU_MUON)->get();
        //dd($DetailPM);
        for($i = 0; $i < count($DetailPM); $i++) {
            $DANHSACHDetail = new ChiTietPhieuTra;
            $DANHSACHDetail->MA_PHIEU_TRA = 'PHIEUTRA_'.count($num);
            $ma = $request->MA_SACH_ITEM;
            $sl = $request->SO_LUONG_ITEM;
            $tt = $request->TINH_TRANG_ITEM;
            $DANHSACHDetail->MA_SACH = $ma;
            $DANHSACHDetail->SO_LUONG = $sl;
            $DANHSACHDetail->TINH_TRANG = $tt;
            $DANHSACHDetail->save();
            $Tinh_trangPM = DB::table('phieu_muon')->where('MA_PHIEU_MUON','like',$request->MA_PHIEU_MUON)->update(['TINH_TRANG'=>'Đã Trả']);
            foreach ($DetailPM as $key => $value) {
                $sach =SACH::where('MA_SACH',$value->MA_SACH)->get();
                if(count($sach) > 0)
                {
                    foreach($sach as $key=>$value)
                    {
                        $x = $value->SO_LUONG_MUON - $request->SO_LUONG_ITEM;
                        $sach->SO_LUONG_MUON = $x;
                        if($x >= 0)
                        {
                        DB::table('sach')->where('MA_SACH',$request->MA_SACH_ITEM)->update(['SO_LUONG_MUON'=>$x]);
                        }
                    }
                }
            }
    }
        $DANHSACH->save();
        Session::flash('flash_message_insert','Yes');
        return redirect()->route('trang-phieu-tra.danh-sach');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listPhieuTra = PHIEUTRA::find($id);
        return view('Trang_Admin.PHIEU.Them_moi_phieu_tra', compact('listPhieuTra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $listPhieuTra = ChiTietPhieuTra::find($id);
        // for($i = 0; $i < count($listPhieuTra); $i++) {
        //     $DANHSACHDetail = new ChiTietPhieuTra;
        //     $DANHSACHDetail->MA_PHIEU_TRA = 'PHIEUTRA_'.count($num);
        //     $ma = $request->MA_SACH_ITEM;
        //     $sl = $request->SO_LUONG_ITEM;
        //     $tt = $request->TINH_TRANG_ITEM;
        //     $DANHSACHDetail->MA_SACH = $ma;
        //     $DANHSACHDetail->SO_LUONG = $sl;
        //     $DANHSACHDetail->TINH_TRANG = $tt;
        //     $DANHSACHDetail->save();
        // }
        // $listPhieuTra->MA_PHIEU_TRA = $request->MA_PHIEU_TRA; 
        // $listPhieuTra->MA_PHIEU_MUON = $request->MA_PHIEU_MUON; 
        // $listPhieuTra->NGAY_TRA = $request->NGAY_TRA; 
        // $listPhieuTra->MA_NHAN_VIEN = $request->MA_NHAN_VIEN; 
        // $listPhieuTra->MA_SACH = $request->MA_SACH; 
        // $listPhieuTra->TINH_TRANG = $request->TINH_TRANG; 
        // $listPhieuTra->save();
        return redirect()->route('trang-phieu-tra.danh-sach')->with(['flash_message_update' => 'Cập nhật phiếu trả thành công !']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listPhieuTra = PHIEUTRA::find($id);
        $listPhieuTra->delete();
        return redirect()->route('trang-phieu-tra.danh-sach')->with(['flash_message_deleted' => 'Xóa phiếu trả thành công !']);;
    }
}
