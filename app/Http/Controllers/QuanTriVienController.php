<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuanTriVien;

use App\NhanVien;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Session;
class QuanTriVienController extends Controller
{
    protected $redirectTo = 'trang-quan-ly';
    public function dangNhap()
    {
        return view('dang-nhap');
    }

    public function xulyDangNhap(Request $request)
    {
        // $this->validate($request,[
        //     'ten_dang_nhap'=>'required',
        //     'mat_khau'=>'required|min:3|max:12'],
        //     [
        //         'ten_dang_nhap.required' => 'Bạn chưa nhập tên đăng nhập',
        //         'mat_khau.required' => 'Bạn chưa nhập mật khẩu',
        //         'mat_khau.min' => 'Mật khẩu không được nhỏ hơn 3 ký tự!',
        //         'mat_khau.max' => 'Mật khẩu không được lớn hơn 12 ký tự!'
        //     ]);
        // $ten_dang_nhap = $request->ten_dang_nhap;
        // $mat_khau = $request->mat_khau;
        // $qtv = QuanTriVien::where('ten_dang_nhap', $ten_dang_nhap)->first();

        // if(Auth::attempt(['ten_dang_nhap'=> $ten_dang_nhap,'password'=>$mat_khau]))
        // {
        //     return redirect()->route('trang-quan-ly.danh-sach');
        // }
        // else
        // {
        //     return redirect()->route('dang-nhap')->with('thongbao','Đăng nhập không thành công');
        // }


        $ten_dang_nhap = $request->ten_dang_nhap;
        $mat_khau = $request->mat_khau;
        $nv = NhanVien::where('HO_TEN', $ten_dang_nhap)->first();
        Session('name',$ten_dang_nhap);
        if(Auth::attempt(['MA_NHAN_VIEN'=> $ten_dang_nhap,'password'=>$mat_khau,'CV' =>'NV']))
        {
            return redirect()->route('trang-quan-ly.danh-sach')->with(['success_acc'=>'Tài Khoản Đăng Nhập Thành Công Với Tên','name'=>$ten_dang_nhap]);
        }
        else
        {
            return redirect()->route('dang-nhap')->with('thongbao','Tên Tài Khoản Hoặc Mật Khẩu Không Hợp Lệ');
            
        }
        // if($qtv == null){
        //     return "Sai ten dang nhap";
        // }

        // if(!Hash::check($mat_khau, $qtv->mat_khau)){
        //     return "Sai ten mat khau";
        // }

        // return "Dang nhap thanh cong";
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
