<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TinTucRequest;
use App\News;

class TinTucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listNews = News::orderBy('created_at','DESC')->get();
        return view('Trang_Admin.TIN_TUC.table_tin_tuc', compact('listNews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Trang_Admin.TIN_TUC.Them_moi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TinTucRequest $request)
    {
        $DanhSach = new News;
        if($request->hasFile('filename')){
            $file = $request->file('filename');
            $name = $file->getClientOriginalName();
            $savefile = $file->move("news",$name);
        }
        $DanhSach->TEN_HA = $request->file('filename')->getClientOriginalName();
        $DanhSach->TIEU_DE_TIN_TUC = $request->TIEU_DE_TIN_TUC;
        $DanhSach->NOI_DUNG_GIOI_THIEU = $request->NOI_DUNG_GIOI_THIEU;
        $DanhSach->NOI_DUNG_CHINH = $request->NOI_DUNG_CHINH;
        $DanhSach->THE_LOAI = $request->input('THE_LOAI');

        $DanhSach->save();
        $msg = "";
        return redirect()->route('trang-tin-tuc.danh-sach');
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
        $listSach = News::find($id);
        return view('Trang_Admin.TIN_TUC.Them_moi', compact('listSach'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TinTucRequest $request, $id)
    {
         $listSach = News::find($id);
         if($request->hasFile('filename')){
            $file = $request->file('filename');
            $name = $file->getClientOriginalName();
            $savefile = $file->move("news",$name);
        }
        $listSach->TEN_HA = $request->file('filename')->getClientOriginalName();
        $listSach->TIEU_DE_TIN_TUC = $request->TIEU_DE_TIN_TUC;
        $listSach->NOI_DUNG_GIOI_THIEU = $request->NOI_DUNG_GIOI_THIEU;
        $listSach->NOI_DUNG_CHINH = $request->NOI_DUNG_CHINH;
        $listSach->THE_LOAI = $request->input('THE_LOAI');

        $listSach->save();
        return redirect()->route('trang-tin-tuc.danh-sach')->with(['flash_message' => 'Cập nhật Thành Công!']);;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listSach = News::find($id);
        $listSach->delete();
        return redirect()->route('trang-tin-tuc.danh-sach')->with(['flash_message' => 'Xóa thành công !']);;
    }

     public function getdatarestore()
    {
        $listSach = News::onlyTrashed()->paginate(10);
        return view('Trang_Admin.TIN_TUC.Danh_sach_Restore',compact('listSach'));
    }
    public function datarestore($id)
    {
        $listSach = News::withTrashed()->find($id);
        $listSach->restore();
        return redirect()->route('trang-tin-tuc.danh-sach')->with(['flash_message_restore' => 'Khôi phục thành công !']);;
    }
}
