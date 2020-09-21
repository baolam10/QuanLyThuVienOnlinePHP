<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TacGiaRequest;
use App\TACGIA;
use App\SACH;

class TacGiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listTacGia = TACGIA::all();
        return view('Trang_Admin.TAC_GIA.Tac_gia', compact('listTacGia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Trang_Admin.TAC_GIA.Them_moi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TacGiaRequest $request)
    {
        $DanhSach = new TACGIA;
        $DanhSach->MA_TAC_GIA = $request->MA_TAC_GIA; 
        $DanhSach->TEN_TAC_GIA = $request->TEN_TAC_GIA;
        $DanhSach->WEBSITE = $request->WEBSITE;
        $DanhSach->GHI_CHU = $request->GHI_CHU;
        $DanhSach->save();
        // dd($request->MA_SACH);
        // exit;
        return redirect()->route('trang-tac-gia.danh-sach')->with(['flash_message_insert' => 'Cập Nhật thành công !']);
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
        $listTacGia = TACGIA::find($id);
        return view('Trang_Admin.TAC_GIA.Them_moi', compact('listTacGia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TacGiaRequest $request, $id)
    {
        $listTacGia = TACGIA::find($id);
        $listTacGia->MA_TAC_GIA = $request->MA_TAC_GIA; 
        $listTacGia->TEN_TAC_GIA = $request->TEN_TAC_GIA;
        $listTacGia->WEBSITE = $request->WEBSITE;
        $listTacGia->GHI_CHU = $request->GHI_CHU;
        $listTacGia->save();
        return redirect()->route('trang-tac-gia.danh-sach')->with(['flash_message_update' => 'Cập Nhật thành công !']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listTacGia = TACGIA::find($id);
        // dd($listTacGia);
        $kiemtra = SACH::where('SO_LUONG_MUON',$id)->count();
        // dd( $kiemtra);
        if($kiemtra == 0)
        {
            $Sach = SACH::where('MA_TAC_GIA','like', $listTacGia->MA_TAC_GIA)->get();
            // dd( $listTacGia);
            if(count($Sach) > 0)
            {
                // dd( $Sach);
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
            $listTacGia->delete();
            return redirect()->route('trang-tac-gia.danh-sach')->with(['flash_message_deleted' => 'Xóa thành công !']);
        }
        else
        {
            return redirect()->route('trang-tac-gia.danh-sach')->with(['flash_message_deleted_at' => 'Xóa thành công !']);  
        }

        // $listTacGia = TACGIA::find($id);
        // $listTacGia->delete();
        // return redirect()->route('trang-tac-gia.danh-sach')->with(['flash_message' => 'Xóa thành công !']);
    }

    public function getdatarestore()
    {
        $listSach = TACGIA::onlyTrashed()->paginate(10);
        return view('Trang_Admin.TAC_GIA.Danh_sach_Restore',compact('listSach'));
    }
    public function datarestore($id)
    {
        $listSach = TACGIA::withTrashed()->find($id);
        $Sach = SACH::withTrashed()->where('MA_TAC_GIA','like',$listSach->MA_TAC_GIA)->get();

        if(count($Sach) > 0)
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
            return redirect()->route('trang-tac-gia.danh-sach')->with(['flash_message_restore' => 'Khôi phục thành công !']);
    }
}
