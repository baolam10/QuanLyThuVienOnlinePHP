<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PhieuMuonRequest;
use App\PHIEUMUON;
use App\PHIEUTRA;
use App\Chitietphieumuon;

class PhieuMuonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listPhieuMuon = PHIEUMUON::all();
        // $listPhieuMuon = PHIEUMUON::orderBy('HAN_TRA', 'desc')->get();
        // dd($listPhieuMuon);
        return view('Trang_Admin.PHIEU.Phieu_muon', compact('listPhieuMuon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Trang_Admin.PHIEU.Them_moi_phieu_muon');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PhieuMuonRequest $request)
    {
        $DANHSACH = new PHIEUMUON;
        $DANHSACH->MA_PHIEU_MUON = $request->MA_PHIEU_MUON; 
        $DANHSACH->MA_SO_THE = $request->MA_SO_THE; 
        $DANHSACH->SO_LUONG = $request->SO_LUONG;
        $DANHSACH->NGAY_MUON = $request->NGAY_MUON;
        $DANHSACH->HAN_TRA = $request->HAN_TRA;
        $DANHSACH->TINH_TRANG = $request->TINH_TRANG;
        $DANHSACH->save();
        $msg = "Thêm phiếu mượn thành công!";
        return redirect()->route('trang-phieu-muon.danh-sach')->with(['flash_message_insert' => 'Cập nhật phiếu mượn thành công !']);
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
        $listPhieuMuon = PHIEUMUON::find($id);
        return view('Trang_Admin.PHIEU.Them_moi_phieu_muon', compact('listPhieuMuon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PhieuMuonRequest $request, $id)
    {
        $listPhieuMuon = PHIEUMUON::find($id);
        $listPhieuMuon->MA_PHIEU_MUON = $request->MA_PHIEU_MUON; 
        $listPhieuMuon->MA_SO_THE = $request->MA_SO_THE; 
        $listPhieuMuon->SO_LUONG = $request->SO_LUONG; 
        $listPhieuMuon->NGAY_MUON = $request->NGAY_MUON; 
        $listPhieuMuon->HAN_TRA = $request->HAN_TRA; 
        $listPhieuMuon->TINH_TRANG = $request->TINH_TRANG;
        $listPhieuMuon->save();
        return redirect()->route('trang-phieu-muon.danh-sach')->with(['flash_message_update' => 'Cập nhật phiếu mượn thành công !']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listPhieuMuon = PHIEUMUON::find($id);
        $kiemtra = Chitietphieumuon::where('SO_LUONG',$id)->count();
        if($kiemtra > 0)
        {
            $listPhieuMuon->delete();
            return redirect()->route('trang-phieu-muon.danh-sach')->with(['flash_message_delete' => 'Xóa phiếu mượn thành công !']);
        }
        else
        {
            echo"<script type='text/javascript>
            alert(Xin lỗi. Không thể xóa phiếu mượn này. Vì phiếu mượn này chưa được trả!)
            window.location='";
            redirect()->route('trang-phieu-muon.danh-sach');
            echo"';
            </script>";
        }
    }

    public function getdatarestore()
    {
        $listSach = PHIEUMUON::onlyTrashed()->paginate(10);
        return view('Trang_Admin.PHIEU.Danh_sach_Restore',compact('listSach'));
    }
    public function datarestore($id)
    {
        $listSach = PHIEUMUON::withTrashed()->find($id);
        $listSach->restore();
        return redirect()->route('trang-phieu-muon.danh-sach')->with(['flash_message_restore' => 'Khôi phục thành công !']);;
    }
}
