<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TheThuVienRequest;
use App\THETHUVIEN;
use App\DOCGIA;

class TheThuVienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listTheThuVien = THETHUVIEN::all();
        return view('Trang_Admin.THE_THU_VIEN.The_thu_vien', compact('listTheThuVien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Trang_Admin.THE_THU_VIEN.Them_moi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TheThuVienRequest $request)
    {
        $DANHSACH = new THETHUVIEN;
        $DANHSACH->MA_SO_THE = $request->MA_SO_THE; 
        $DANHSACH->NGAY_BAT_DAU = $request->NGAY_BAT_DAU;
        $DANHSACH->NGAY_HET_HAN = $request->NGAY_HET_HAN;
        $DANHSACH->GHI_CHU = $request->GHI_CHU;
        $DANHSACH->save();
        return redirect()->route('trang-the-thu-vien.danh-sach')->with(['flash_message_insert' => 'Thêm Thẻ Thư Viện thành công !']);
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
        $listTheThuVien = THETHUVIEN::find($id);
        return view('Trang_Admin.THE_THU_VIEN.Them_moi', compact('listTheThuVien'));
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
        $listTheThuVien = THETHUVIEN::find($id);
        $listTheThuVien->MA_SO_THE = $request->MA_SO_THE; 
        $listTheThuVien->NGAY_BAT_DAU = $request->NGAY_BAT_DAU; 
        $listTheThuVien->NGAY_HET_HAN = $request->NGAY_HET_HAN; 
        $listTheThuVien->GHI_CHU = $request->GHI_CHU; 
        $listTheThuVien->save();
        return redirect()->route('trang-the-thu-vien.danh-sach')->with(['flash_message_update' => 'Cập Nhật Thẻ Thư Viện thành công !']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listTheThuVien = THETHUVIEN::find($id);
        $tacgia = DOCGIA::where('MA_SO_THE','like',$listTheThuVien->MA_SO_THE)->get();
        if(count($tacgia) > 0)
        {
            foreach($tacgia as $key => $value)
            {
                $x = DOCGIA::find($value->id);
                $x->delete();
            }
        }
        else
        {
            echo"<script type= text/javascript>
            alert(Sorry!)
            </script>";
        }
        $listTheThuVien->delete();
        return redirect()->route('trang-the-thu-vien.danh-sach')->with(['flash_message' => 'Xóa Thẻ Thư Viện thành công !']);;
    }

    public function getdatarestore()
    {
        $listSach = THETHUVIEN::onlyTrashed()->paginate(10);
        return view('Trang_Admin.THE_THU_VIEN.Danh_sach_Restore',compact('listSach'));
    }
    public function datarestore($id)
    {
        $listSach = THETHUVIEN::withTrashed()->find($id);
        $tacgia = DOCGIA::withTrashed()->where('MA_SO_THE','like',$listSach->MA_SO_THE)->get();
        if(count($tacgia) > 0)
        {
            foreach($tacgia as $key=>$value)
            {
                $x = DOCGIA::withTrashed()->find($value->$id);
                $x->restore();
            }
            $listSach->restore();
        }
        else
        {
            echo"<script type=text/javascript>
            alert(Sorry!)
            </script>";
        }
        return redirect()->route('trang-the-thu-vien.danh-sach')->with(['flash_message_restore' => 'Khôi phục thành công !']);;
    }
}
