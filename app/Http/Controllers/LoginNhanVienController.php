<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NhanVien;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginNhanVienController extends Controller
{
         protected $redirectTo = 'trang-quan-ly';
         public function dangNhap()
         {
             return view('dang-nhap');
         }

         public function xulyDangNhap(Request $request)
         {
        $ho_ten = $request->HO_TEN;
        $pass = $request->MAT_KHAU;
        $qtv = NhanVien::where('HO_TEN', $ho_ten)->first();

        if(Auth::attempt(['HO_TEN'=> $ho_ten,'MAT_KHAU'=>$pass]))
        {
            return redirect()->route('trang-quan-ly.danh-sach');
        }
        else
        {
            return redirect()->route('dang-nhap')->with('thongbao','Đăng nhập không thành công');
        }
    }

    public function layThongTin()
    {
        return Auth::id();
    }

    public function dangXuat()
    {
        Auth::logout();
        return redirect()->route('dang-nhap');
    }
}
