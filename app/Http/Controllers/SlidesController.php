<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SlidesRequest;
use App\Slides;

class SlidesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listSlide = Slides::orderBy('created_at','DESC')->get();
        return view('Trang_Admin.SLIDES.table_slides', compact('listSlide'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Trang_Admin.SLIDES.Them_moi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SlidesRequest $request)
    {
        $DanhSach = new Slides;
        if($request->hasFile('filename')){
            $file = $request->file('filename');
            $name = $file->getClientOriginalName();
            $savefile = $file->move("images",$name);
        }
        $DanhSach->TEN_HA = $request->file('filename')->getClientOriginalName();
        $DanhSach->NOI_DUNG_GIOI_THIEU = $request->NOI_DUNG_GIOI_THIEU;

        $DanhSach->save();
        $msg = "";
        return redirect()->route('trang-slides.danh-sach');
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
       $listSach = Slides::find($id);
        return view('Trang_Admin.SLIDES.Them_moi', compact('listSach'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SlidesRequest $request, $id)
    {
         $DanhSach = Slides::find($id);
        if($request->hasFile('filename')){
            $file = $request->filename;
            $name = $file->getClientOriginalName();
            $savefile = $file->move("images",$name);
        }
        $DanhSach->TEN_HA = $request->filename;
        $DanhSach->NOI_DUNG_GIOI_THIEU = $request->NOI_DUNG_GIOI_THIEU;

        $DanhSach->save();
        $msg = "";
        return redirect()->route('trang-slides.danh-sach')->with(['flash_message' => 'Cập nhật Sách Thành Công!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listSach = Slides::find($id);
        $listSach->delete();
        return redirect()->route('trang-slides.danh-sach')->with(['flash_message' => 'Xóa thành công !']);;
    }

    public function getdatarestore()
    {
        $listSach = Slides::onlyTrashed()->paginate(10);
        return view('Trang_Admin.SLIDES.Danh_sach_Restore',compact('listSach'));
    }
    public function datarestore($id)
    {
        $listSach = Slides::withTrashed()->find($id);
        $listSach->restore();
        return redirect()->route('trang-slides.danh-sach')->with(['flash_message_restore' => 'Khôi phục sách thành công !']);;
    }
}
