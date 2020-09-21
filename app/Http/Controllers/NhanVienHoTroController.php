<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\NhanVienHoTroRequest;
use App\NHANVIEN;

class NhanVienHoTroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listNhanVienSP = NHANVIEN::where('CV','like','NV_HO_TRO')->get();
        return view('Trang_Admin.NHAN_VIEN.Nhan_vien', compact('listNhanVienSP'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Trang_Admin.NHAN_VIEN.Them_moi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NhanVienHoTroRequest $request)
    {
        $DANHSACH = new NHANVIEN;
        $DANHSACH->MA_NHAN_VIEN = $request->MA_NHAN_VIEN; 
        $DANHSACH->HO_TEN = $request->HO_TEN; 
        $DANHSACH->CV = 'NV_HO_TRO'; 
        $DANHSACH->NGAY_SINH = $request->NGAY_SINH; 
        $DANHSACH->MAT_KHAU = Hash::make($request->MAT_KHAU); 
        $DANHSACH->GIOI_TINH = $request->GIOI_TINH; 
        $DANHSACH->SO_DIEN_THOAI = $request->SO_DIEN_THOAI; 
        $DANHSACH->EMAIL = $request->EMAIL; 
        $DANHSACH->NGAY_VAO_LAM = $request->NGAY_VAO_LAM; 
        $DANHSACH->save();
        $msg = "";
        return redirect()->route('trang-nhan-vien-ho-tro.danh-sach')->with(['flash_message_insert' => 'Cập nhật thành công !']);
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
        $listNhanVienSP = NHANVIEN::find($id);
        return view('Trang_Admin.NHAN_VIEN.Them_moi', compact('listNhanVienSP'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NhanVienHoTroRequest $request, $id)
    {
        $listNhanVienSP = NHANVIEN::find($id);
        $listNhanVienSP->MA_NHAN_VIEN = $request->MA_NHAN_VIEN; 
        $listNhanVienSP->HO_TEN = $request->HO_TEN; 
        $listNhanVienSP->NGAY_SINH = $request->NGAY_SINH; 
        $listNhanVienSP->MAT_KHAU = $request->MAT_KHAU; 
        $listNhanVienSP->GIOI_TINH = $request->GIOI_TINH; 
        $listNhanVienSP->SO_DIEN_THOAI = $request->SO_DIEN_THOAI; 
        $listNhanVienSP->EMAIL = $request->EMAIL; 
        $listNhanVienSP->NGAY_VAO_LAM = $request->NGAY_VAO_LAM; 
        $listNhanVienSP->save();
        return redirect()->route('trang-nhan-vien-ho-tro.danh-sach')->with(['flash_message_update' => 'Cập nhật thành công !']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listNhanVienSP = NHANVIEN::find($id);
        $listNhanVienSP->delete();
        return redirect()->route('trang-nhan-vien-ho-tro.danh-sach')->with(['flash_message_deleted' => 'Xóa thành công !']);;
    }

    public function getdatarestore()
    {
        $listSach = NHANVIEN::onlyTrashed()->paginate(10);
        return view('Trang_Admin.NHAN_VIEN.Danh_sach_Restore',compact('listSach'));
    }
    public function datarestore($id)
    {
        $listSach = NHANVIEN::withTrashed()->find($id);
        $listSach->restore();
        return redirect()->route('trang-nhan-vien-ho-tro.danh-sach')->with(['flash_message_restore' => 'Khôi phục sách thành công !']);;
    }
}
