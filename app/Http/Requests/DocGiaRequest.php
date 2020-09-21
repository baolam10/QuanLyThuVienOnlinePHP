<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocGiaRequest extends FormRequest
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
        $todayDate = date('m/d/Y');
        return [
            // 'MA_DOC_GIA'        =>  'bail|required|max:30|min:4|regex:/[^#&<>.,()\[\]*`\-=@"~!:;$^%{}?]$/|unique:DOC_GIA',   
            'TEN_DOC_GIA'       =>  'bail|required|max:254|min:5|regex:/[^#&<>,\[\]*`+\-=@"~!:;$^%{}?]$/',
            'DIA_CHI'           =>  'bail|required|max:254|min:5|regex:/[^#&<>,\[\]*`+\-=@"~!:;$^%{}?]$/',
            'MA_SO_THE'         =>  'bail|required|min:0|integer|unique:DOC_GIA',
            'GIOI_TINH'         =>  'bail|required|max:254|min:2',
            'MAT_KHAU'          =>  'bail|required|max:12|min:5',
            // 'HAN_SU_DUNG'       =>  'bail|required|max:254|min:7|after_or_equal:date|after:now',
            'EMAIL'             =>  'bail|required|max:254|min:5|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix'
        ];
    }

    public function messages()
    {
        return[
            'TEN_DOC_GIA.required'      => 'Tên đọc giả không được để trống!',
            'TEN_DOC_GIA.regex'         => 'Tên đọc giả không chứa các ký tự đặc biệt!',
            'TEN_DOC_GIA.min'           => 'Tên đọc giả phải từ 5 ký tự trở lên!',
            'TEN_DOC_GIA.max'           => 'Tên đọc giả dưới 254 ký tự!',
            'DIA_CHI.required'          => 'Địa chỉ không được để trống!',
            'DIA_CHI.regex'             => 'Địa chỉ không chứa các ký tự đặc biệt!',
            'DIA_CHI.min'               => 'Địa chỉ phải từ 5 ký tự trở lên!',
            'DIA_CHI.max'               => 'Địa chỉ dưới 254 ký tự trở xuống!',
            'MA_SO_THE.required'        => 'Mã số thẻ không được để trống!',
            'MA_SO_THE.unique'          => 'Mã số thẻ đã tồn tại!',
            'MA_SO_THE.min'             => 'Mã số thẻ phải lớn hơn 0!',
            'MA_SO_THE.integer'         => 'Mã số thẻ phải là số nguyên!',
            'GIOI_TINH.required'        => 'Giới tính không được để trống!',
            'GIOI_TINH.min'             => 'Giới tính phải từ 2 ký tự trở lên!',
            'GIOI_TINH.max'             => 'Giới tính phải dưới 254 ký tự trở xuống!',
            'MAT_KHAU.required'         => 'Mật khẩu không được để trống!',
            'MAT_KHAU.min'              => 'Mật khẩu phải từ 5 ký tự trở lên!',
            'MAT_KHAU.max'              => 'Mật khẩu phải dưới 12 ký tự trở xuống!',
            'EMAIL.required'            => 'Email không được để trống!',
            'EMAIL.regex'               => 'Email không đúng định dạng!',
            'EMAIL.min'                 => 'Email phải từ 5 ký tự trở lên!',
            'EMAIL.max'                 => 'Email phải từ 254 ký tự trở xuống!'
        ];
    }
}
