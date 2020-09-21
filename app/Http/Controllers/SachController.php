<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TrangSachRequest;
use App\SACH;
use App\THELOAI;
use App\TACGIA;
use App\NHAXUATBAN;

class SachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Theloais = THELOAI::all();
        $Tacgias= TACGIA::all();
        $Nhaxuatbans = NHAXUATBAN::all();
        $listSach = SACH::where('id','>', 0)
                    ->with(['theLoai','nhaXuatBan','tacGia'])
                    ->get();
        // $listSach = SACH::whereIn('MA_THE_LOAI',$Theloais->modelKeys())
        // ->whereIn('MA_TAC_GIA',$Tacgias->modelKeys())
        // ->whereIn('MA_NXB',$Nhaxuatbans->modelKeys())->get();
        // dd($Theloais);
        return view('Trang_Admin.SACH.table_sach', compact('listSach'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listTheloai = THELOAI::all();
        $listTacgia = TACGIA::all();
        $listNhaxuatban = NHAXUATBAN::all();
        return view ('Trang_Admin.SACH.Them_moi', compact('listTheloai','listTacgia','listNhaxuatban'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TrangSachRequest $request)
    {
       
        $DanhSach = new SACH;
        $DanhSach->MA_SACH = $request->MA_SACH;
        $DanhSach->TEN_SACH = $request->TEN_SACH;
        $DanhSach->MA_TAC_GIA = $request->MA_TAC_GIA; 
        $DanhSach->MA_THE_LOAI = $request->MA_THE_LOAI;
        $DanhSach->MA_NXB = $request->MA_NXB;
        $DanhSach->MA_HA = $request->MA_HA;
        $DanhSach->NAM_XUAT_BAN = $request->NAM_XUAT_BAN;
        $DanhSach->SO_LUONG = $request->SO_LUONG;
        $DanhSach->SO_LUONG_MUON = 0;
        $DanhSach->NOI_DUNG_GIOI_THIEU = $request->NOI_DUNG_GIOI_THIEU;
        $DanhSach->NOI_DUNG_CHINH = $request->NOI_DUNG_CHINH;
        $DanhSach->TINH_TRANG = $request->input('TINH_TRANG');
        $DanhSach->save();
        $msg = "";
        return redirect()->route('trang-sach.danh-sach')->with(['flash_message_insert' => 'Thêm Sách Thành Công!']);

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
        $listSach = SACH::find($id);
        $listTacGia = SACH::find($id);
        $listTheloai = THELOAI::all();
        $listTacgia = TACGIA::all();
        $listNhaxuatban = NHAXUATBAN::all();
        return view('Trang_Admin.SACH.Them_moi', compact('listSach','listTheloai','listTacgia','listNhaxuatban'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TrangSachRequest $request, $id)
    {
        $listSach = SACH::find($id);
        $listSach->MA_SACH = $request->MA_SACH;
        $listSach->TEN_SACH = $request->TEN_SACH;
        $listSach->MA_TAC_GIA = $request->MA_TAC_GIA; 
        $listSach->MA_THE_LOAI = $request->MA_THE_LOAI;
        $listSach->MA_NXB = $request->MA_NXB;
        $listSach->MA_HA = $request->MA_HA;
        $listSach->NAM_XUAT_BAN = $request->NAM_XUAT_BAN;
        $listSach->SO_LUONG = $request->SO_LUONG;
        $listSach->NOI_DUNG_GIOI_THIEU = $request->NOI_DUNG_GIOI_THIEU;
        $listSach->NOI_DUNG_CHINH = $request->NOI_DUNG_CHINH;
        $listSach->TINH_TRANG = $request->input('TINH_TRANG');
        $listSach->save();
        // dd($request->MA_SACH);
        // exit;
        return redirect()->route('trang-sach.danh-sach')->with(['flash_message_update' => 'Cập nhật Sách Thành Công!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listSach = SACH::find($id);
        $listSach->delete();
        return redirect()->route('trang-sach.danh-sach')->with(['flash_message_deleted' => 'Xóa sách thành công !']);;
    }

    public function getdatarestore()
    {
        $listSach = SACH::onlyTrashed()->paginate(10);
        return view('Trang_Admin.SACH.Danh_sach_Restore',compact('listSach'));
    }
    public function datarestore($id)
    {
        $listSach = SACH::withTrashed()->find($id);
        $listSach->restore();
        return redirect()->route('trang-sach.danh-sach')->with(['flash_message_restore' => 'Khôi phục sách thành công !']);;
    }
}
