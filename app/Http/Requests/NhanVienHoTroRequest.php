<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NhanVienHoTroRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'MA_NHAN_VIEN'      =>  'bail|required|min:0|integer|unique:NHAN_VIEN',   
            "HO_TEN"            =>  'bail|required|max:100|min:4|regex:/[^#&<>.,()\[\]*`\-=@"~!:;$^%{}?]$/',
            "CV"                =>  'bail|required',
            "NGAY_SINH"         =>  'bail|required',
            "MAT_KHAU"          =>  'bail|required',
            "GIOI_TINH"         =>  'bail|required',
            "SO_DIEN_THOAI"     =>  'bail|required|max:99999999999|min:0|integer',
            "EMAIL"             =>  'bail|required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
            "NGAY_VAO_LAM"      =>  'bail|required|after:now'
        ];
    }

    public function messages()
    {
        return[
            'MA_NHAN_VIEN.required'         => 'Mã nhân viên không được để trống!',
            'MA_NHAN_VIEN.unique'           => 'Mã nhân viên đã tồn tại!',
            'MA_NHAN_VIEN.integer'          => 'Mã nhân viên phải là số nguyên!',
            'MA_NHAN_VIEN.min'              => 'Mã nhân viên phải lớn hơn 0!',
            'HO_TEN.required'               => 'Họ tên không được để trống!',
            'HO_TEN.regex'                  => 'Họ tên không chứa các ký tự đặc biệt!',
            'HO_TEN.min'                    => 'Họ tên phải từ 4 ký tự trở lên!',
            'HO_TEN.max'                    => 'Họ tên phải dưới 100 ký tự trở xuống!',
            'CV.required'                   => 'Chức vụ không được để trống!',
            'CV.regex'                      => 'Chức vụ không chứa các ký tự đặc biệt!',
            'CV.min'                        => 'Chức vụ phải từ 5 ký tự trở lên!',
            'CV.max'                        => 'Chức vụ phải dưới 20 ký tự trở xuống!',
            'NGAY_SINH.required'            => 'Ngày sinh không được để trống!',
            'MAT_KHAU.required'             => 'Mật khẩu không được để trống!',
            'GIOI_TINH.required'            => 'Giới tính không được để trống!',
            'SO_DIEN_THOAI.required'        => 'Số điện thoại không được để trống!',
            'SO_DIEN_THOAI.min'             => 'Số điện thoại phải nhập không được phép âm!',
            'SO_DIEN_THOAI.max'             => 'Số điện thoại phải nhập dưới 11 số trở xuống!',
            'SO_DIEN_THOAI.integer'         => 'Số điện thoại phải là số nguyên!',
            'EMAIL.required'                => 'Email không được để trống!',
            'EMAIL.regex'                   => 'Email phải đúng định dạng!',
            'NGAY_VAO_LAM.required'         => 'Ngày vào làm không được để trống!',
            'NGAY_VAO_LAM.after'            => 'Ngày vào làm không được bằng ngày hoặc nhỏ hơn ngày hiện tại!'
        ];
    }
}
