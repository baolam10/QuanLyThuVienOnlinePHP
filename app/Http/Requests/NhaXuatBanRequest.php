<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\TrangSachRequest;

class NhaXuatBanRequest extends FormRequest
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
            'MA_NXB'        =>  'bail|required|max:1000|min:0|integer|unique:NHA_XUAT_BAN',   
            "TEN_NXB"       =>  'bail|required|max:100|min:4|regex:/[^#&<>,\[\]*`+\-=@"~!:;$^%{}?]$/',
            "DIA_CHI"       =>  'bail|required|max:100|min:4|regex:/[^#&<>,\[\]*`+\-=@"~!:;$^%{}?]$/',
            "EMAIL"         =>  'bail|required|max:100|min:4|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix'

        ];
    }

    public function messages()
        {
            return[
                'MA_NXB.required'       => 'Mã nhà xuất bản không được để trống!',
                'MA_NXB.unique'         => 'Mã nhà xuất bản đã tồn tại!',
                'MA_NXB.integer'        => 'Mã nhà xuất bản phải là số nguyên!',
                'MA_NXB.min'            => 'Mã nhà xuất bản phải lớn hơn 0!',
                'MA_NXB.max'            => 'Mã nhà xuất bản phải nhỏ hơn 1000!',
                'TEN_NXB.required'      => 'Tên nhà xuất bản không được để trống!',
                'TEN_NXB.regex'         => 'Tên nhà xuất bản không chứa các ký tự đặc biệt!',
                'TEN_NXB.min'           => 'Tên nhà xuất bản phải từ 4 ký tự trở lên!',
                'TEN_NXB.max'           => 'Tên nhà xuất bản phải từ 100 ký tự trở xuống!',
                'DIA_CHI.required'      => 'Địa chỉ không được để trống!',
                'DIA_CHI.regex'         => 'Địa chỉ không chứa các ký tự đặc biệt!',
                'DIA_CHI.min'           => 'Địa chỉ phải từ 4 ký tự trở lên!',
                'DIA_CHI.max'           => 'Địa chỉ phải từ 100 ký tự trở xuống!',
                'EMAIL.required'        => 'Email không được để trống!',
                'EMAIL.min'             => 'Email phải từ 4 ký tự trở lên!',
                'EMAIL.max'             => 'Email phải từ 100 ký tự trở xuống!',
                'EMAIL.regex'           => 'Email không đúng định dạng!'    
            ];
        }
}
