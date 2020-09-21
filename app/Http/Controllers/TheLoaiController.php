<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TheLoaiRequest;
use App\THELOAI;
use App\SACH;

class TheLoaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listTheLoai = THELOAI::all();
        return view('Trang_Admin.THE_LOAI.The_loai', compact('listTheLoai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Trang_Admin.THE_LOAI.Them_moi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TheLoaiRequest $request)
    {
        $DanhSach = new THELOAI;
        $DanhSach->MA_THE_LOAI = $request->MA_THE_LOAI; 
        $DanhSach->TEN_THE_LOAI = $request->TEN_THE_LOAI;
        $DanhSach->save();
        return redirect()->route('trang-the-loai.danh-sach')->with(['flash_message_insert' => 'Cập Nhật thành công !']);
    
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
        $listTheLoai = THELOAI::find($id);
        return view('Trang_Admin.THE_LOAI.Them_moi', compact('listTheLoai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TheLoaiRequest $request, $id)
    {
        $listTheLoai = THELOAI::find($id);
        $listTheLoai->MA_THE_LOAI = $request->MA_THE_LOAI; 
        $listTheLoai->TEN_THE_LOAI = $request->TEN_THE_LOAI;
        $listTheLoai->save();
        return redirect()->route('trang-the-loai.danh-sach')->with(['flash_message_update' => 'Cập Nhật thành công !']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listTheLoai = THELOAI::find($id);
        $kiemtra = SACH::where('SO_LUONG_MUON',$id)->count();
        if($kiemtra == 0)
        {
        $Sach = SACH::where('MA_THE_LOAI','like',$listTheLoai->MA_THE_LOAI)->get();
        if(count($Sach) > 0 )
        {
            foreach ($Sach as $key => $value) 
            {
                $x = SACH::find($value->id);
                $x->delete();
            }
        }
        else
        {
            echo "<script type='text/javascript'>
            alert('Sai roi')
            </script>";
        }
        $listTheLoai->delete();
        return redirect()->route('trang-the-loai.danh-sach')->with(['flash_message' => 'Xóa thành công !']);;
    }
    else
        {
            return redirect()->route('trang-the-loai.danh-sach')->with(['flash_message_deleted_at' => 'Xóa thành công !']);
        }
}

    public function getdatarestore()
    {
        $listSach = THELOAI::onlyTrashed()->paginate(10);
        return view('Trang_Admin.THE_LOAI.Danh_sach_Restore',compact('listSach'));
    }
    public function datarestore($id)
    {
        $listSach = THELOAI::withTrashed()->find($id);
        $Sach = SACH::withTrashed()->where('MA_THE_LOAI','like',$listSach->MA_THE_LOAI)->get();
        if(count($Sach) > 0 )
        {
            foreach ($Sach as $key => $value) 
            {
                $x = SACH::withTrashed()->find($value->id);
                $x->restore();
            }
        }
        else
        {
            echo "<script type='text/javascript'>
            alert('Sai roi')
            </script>";
        }
        $listSach->restore();
        return redirect()->route('trang-the-loai.danh-sach')->with(['flash_message_restore' => 'Khôi phục thành công !']);;
    }
}
