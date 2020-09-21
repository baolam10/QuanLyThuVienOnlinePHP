<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\DocGiaRequest;
use App\DOCGIA;

class DocGiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listDocGia = DOCGIA::all();
        return view('Trang_Admin.DOC_GIA.Doc_gia', compact('listDocGia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Trang_Admin.DOC_GIA.Them_moi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DocGiaRequest $request)
    {
        $DANHSACH                   = new DOCGIA;
        $DANHSACH->TEN_DOC_GIA      = $request->TEN_DOC_GIA; 
        $DANHSACH->DIA_CHI          = $request->DIA_CHI; 
        $DANHSACH->MA_SO_THE        = $request->MA_SO_THE; 
        $DANHSACH->GIOI_TINH        = $request->GIOI_TINH; 
        $DANHSACH->MAT_KHAU         = Hash::make($request->MAT_KHAU); 
        $DANHSACH->EMAIL            = $request->EMAIL;
        $DANHSACH->save();
        return redirect()->route('trang-doc-gia.danh-sach')->with(['flash_message_insert' => 'Thêm độc giả thành công !']);
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
        $listDocGia = DOCGIA::find($id);
        return view('Trang_Admin.DOC_GIA.Them_moi', compact('listDocGia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DocGiaRequest $request, $id)
    {
        $listDocGia                     = DOCGIA::find($id);
        $listDocGia->TEN_DOC_GIA        = $request->TEN_DOC_GIA; 
        $listDocGia->DIA_CHI            = $request->DIA_CHI; 
        $listDocGia->MA_SO_THE          = $request->MA_SO_THE; 
        $listDocGia->GIOI_TINH          = $request->GIOI_TINH; 
        $listDocGia->MAT_KHAU           = $request->MAT_KHAU; 
        $listDocGia->EMAIL              = $request->EMAIL; 
        $listDocGia->save();
        return redirect()->route('trang-doc-gia.danh-sach')->with(['flash_message_update' => 'Cập nhật độc giả thành công !']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listDocGia = DOCGIA::find($id);
        $listDocGia->delete();
        return redirect()->route('trang-doc-gia.danh-sach')->with(['flash_message_deleted' => 'Xóa độc giả thành công !']);;
    }

    public function getdatarestore()
    {
        $listSach = DOCGIA::onlyTrashed()->paginate(10);
        return view('Trang_Admin.DOC_GIA.Danh_sach_Restore',compact('listSach'));
    }
    public function datarestore($id)
    {
        $listSach = DOCGIA::withTrashed()->find($id);
        $listSach->restore();
        return redirect()->route('trang-doc-gia.danh-sach')->with(['flash_message_restore' => 'Khôi phục thành công !']);;
    }
}
