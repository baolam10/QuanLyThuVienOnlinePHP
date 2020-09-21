<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NhaXuatBanRequest;
use App\NHAXUATBAN;
use App\SACH;   

class NhaXuatBanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listNhaXuatBan = NHAXUATBAN::all();
        return view('Trang_Admin.NHA_XUAT_BAN.Nha_xuat_ban', compact('listNhaXuatBan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Trang_Admin.NHA_XUAT_BAN.Them_moi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NhaXuatBanRequest $request)
    {
        $DANHSACH = new NHAXUATBAN;
        $DANHSACH->MA_NXB = $request->MA_NXB; 
        $DANHSACH->TEN_NXB = $request->TEN_NXB; 
        $DANHSACH->DIA_CHI = $request->DIA_CHI; 
        $DANHSACH->EMAIL = $request->EMAIL; 
        $DANHSACH->save();
        return redirect()->route('trang-nha-xuat-ban.danh-sach')->with(['flash_message_insert' => 'Thêm Nhà Xuất Bản thành công !']);
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
        $listNhaXuatBan = NHAXUATBAN::find($id);
        return view('Trang_Admin.NHA_XUAT_BAN.Them_moi', compact('listNhaXuatBan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NhaXuatBanRequest $request, $id)
    {
        $listNhaXuatBan = NHAXUATBAN::find($id);
        $listNhaXuatBan->MA_NXB = $request->MA_NXB; 
        $listNhaXuatBan->TEN_NXB = $request->TEN_NXB; 
        $listNhaXuatBan->DIA_CHI = $request->DIA_CHI; 
        $listNhaXuatBan->EMAIL = $request->EMAIL; 
        $listNhaXuatBan->save();
        return redirect()->route('trang-nha-xuat-ban.danh-sach')->with(['flash_message_update' => 'Cập nhật Nhà Xuất Bản thành công !']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listNhaXuatBan = NHAXUATBAN::find($id);
        $kiemtra = SACH::where('SO_LUONG_MUON',$id)->count();
        if($kiemtra == 0)
        {
        $Sach = SACH::where('MA_NXB','like',$listNhaXuatBan->MA_NXB)->get();
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
        $listNhaXuatBan->delete();
        return redirect()->route('trang-nha-xuat-ban.danh-sach')->with(['flash_message_deleted' => 'Xóa Nhà Xuất Bản thành công !']);
    }
    else
        {
            return redirect()->route('trang-nha-xuat-ban.danh-sach')->with(['flash_message_deleted_at' => 'Xóa Nhà Xuất Bản thành công !']);
        }
}

    public function getdatarestore()
    {
        $listSach = NHAXUATBAN::onlyTrashed()->paginate(10);
        return view('Trang_Admin.NHA_XUAT_BAN.Danh_sach_Restore',compact('listSach'));
    }
    public function datarestore($id)
    {
        $listSach = NHAXUATBAN::withTrashed()->find($id);
        $Sach = SACH::withTrashed()->where('MA_NXB','like',$listSach->MA_NXB)->get();
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
        return redirect()->route('trang-nha-xuat-ban.danh-sach')->with(['flash_message_restore' => 'Khôi phục thành công !']);;
    }
}
