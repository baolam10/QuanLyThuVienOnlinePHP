<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PhieuPhatRequest;
use App\PHIEUPHAT;
use App\PHIEUMUON;

class PhieuPhatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listPhieuPhat = PHIEUPHAT::all();
        return view('Trang_Admin.PHIEU.Phieu_phat', compact('listPhieuPhat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Trang_Admin.PHIEU.Them_moi_phieu_phat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PhieuPhatRequest $request)
    {
        $DANHSACH = new PHIEUPHAT;
        $DANHSACH->MA_PHIEU_PHAT = $request->MA_PHIEU_PHAT; 
        $DANHSACH->MA_DOC_GIA = $request->MA_DOC_GIA; 
        $DANHSACH->NGAY_MUON = $request->NGAY_MUON; 
        $DANHSACH->NGAY_TRA = $request->NGAY_TRA;
        $DANHSACH->LY_DO = $request->LY_DO;
        $DANHSACH->save();
        $msg = "";
        return redirect()->route('trang-phieu-phat.danh-sach', compact('msg'));
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
        $listPhieuPhat = PHIEUPHAT::find($id);
        return view('Trang_Admin.PHIEU.Them_moi_phieu_phat', compact('listPhieuPhat'));
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
        $listPhieuPhat = PHIEUPHAT::find($id);
        $listPhieuPhat->MA_PHIEU_PHAT = $request->MA_PHIEU_PHAT; 
        $listPhieuPhat->MA_DOC_GIA = $request->MA_DOC_GIA; 
        $listPhieuPhat->NGAY_MUON = $request->NGAY_MUON; 
        $listPhieuPhat->NGAY_TRA = $request->NGAY_TRA; 
        $listPhieuPhat->LY_DO = $request->LY_DO; 
        $listPhieuPhat->save();
        return redirect()->route('trang-phieu-phat.danh-sach')->with(['flash_message' => 'Cập nhật phiếu phạt thành công !']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listPhieuPhat = PHIEUPHAT::find($id);
        $listPhieuPhat->delete();
        return redirect()->route('trang-phieu-phat.danh-sach')->with(['flash_message' => 'Xóa phiếu phạt thành công !']);;
    }

    public function Danhsachphieuphat()
    {
        $listDanhSachPhat = PHIEUMUON::orderBy('HAN_TRA')->get();
        return view('Trang_Admin.PHIEU.Danh_sach_den_han_tra', compact('listDanhSachPhat'));
    }
}
