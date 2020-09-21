<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrangSachRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'MA_SACH'               =>  'bail|required|regex:/[^#&<>.,()\[\]*`\-=@"~!:;$^%{}?]$/|unique:Sach',   
            'TEN_SACH'              =>  'bail|required|max:255|min:5|regex:/[^#&<>.,()\[\]*`\-=@"~!:;$^%{}?]$/',
            'MA_HA'                 =>  'bail|required|max:50|min:3|regex:/[^#&<>.,()\[\]*`\-=@"~!:;$^%{}?]$/',
            'NAM_XUAT_BAN'          =>  'bail|required|max:2030|min:2000|integer',
            'SO_LUONG'              =>  'bail|required|max:100|min:0|integer',
            'NOI_DUNG_GIOI_THIEU'   =>  'bail|required|max:255|min:10',
            'NOI_DUNG_CHINH'        =>  'bail|required|max:1000|min:10',
            'TINH_TRANG'            =>  'bail|required'

        ];
    }

    public function messages()
        {
            return[
                'MA_SACH.required'                  => 'Mã sách không được để trống!',
                'MA_SACH.unique'                    => 'Mã sách đã tồn tại!',
                'MA_SACH.regex'                     => 'Mã sách không chứa các ký tự đặc biệt!',
                'TEN_SACH.required'                 => 'Tên sách không được để trống!',
                'TEN_SACH.min'                      => 'Tên sách phải 5 ký tự trở lên!',
                'TEN_SACH.max'                      => 'Tên sách phải dưới 255 ký tự!',
                'TEN_SACH.regex'                    => 'Tên sách không chứa các ký tự đặc biệt!',
                'MA_NXB.required'                   => 'Mã nhà xuất bản không được để trống!',
                'MA_NXB.min'                        => 'Mã nhà xuất bản phải 2 ký tự trở lên!',
                'MA_NXB.max'                        => 'Mã nhà xuất bản phải dưới 10 ký tự!',
                'MA_NXB.regex'                      => 'Mã nhà xuất bản không chứa các ký tự đặc biệt!',
                'MA_HA.required'                    => 'Mã hình ảnh không được để trống!',
                'MA_HA.regex'                       => 'Mã hình ảnh không chứa các ký tự đặc biệt!',
                'MA_HA.min'                         => 'Mã hình ảnh phải từ 3 ký tự trở lên!',
                'MA_HA.max'                         => 'Mã hình ảnh phải từ 50 ký tự trở xuống!',
                'NAM_XUAT_BAN.required'             => 'Năm xuất bản không được để trống!',
                'NAM_XUAT_BAN.min'                  => 'Năm xuất bản bắt buộc không được nhỏ hơn 2000!',
                'NAM_XUAT_BAN.max'                  => 'Năm xuất bản bắt buộc phải nhỏ hơn 2030!',
                'NAM_XUAT_BAN.integer'              => 'Năm xuất bản bắt buộc phải nhập số nguyên!',
                'SO_LUONG.required'                 => 'Số lượng không được để trống!',
                'SO_LUONG.min'                      => 'Số lượng bắt buộc phải lớn hơn 0!',
                'SO_LUONG.max'                      => 'Số lượng bắt buộc phải nhỏ hơn 100!',
                'SO_LUONG.integer'                  => 'Số lượng bắt buộc phải là số nguyên!',
                'NOI_DUNG_GIOI_THIEU.required'      => 'Nội dung giới thiệu không được để trống!',
                'NOI_DUNG_GIOI_THIEU.min'           => 'Nội dung giới thiệu phải bắt buộc lớn hơn 10 ký tự!',
                'NOI_DUNG_GIOI_THIEU.max'           => 'Nội dung giới thiệu phải bắt buộc nhỏ hơn 255 ký tự!',
                'NOI_DUNG_CHINH.required'           => 'Nội dung chính không được để trống!',
                'NOI_DUNG_CHINH.min'                => 'Nội dung chính bắt buộc phải lớn hơn 10 ký tự!',
                'NOI_DUNG_CHINH.max'                => 'Nội dung chính bắt buộc phải nhỏ hơn 1000 ký tự!',
                'TINH_TRANG.required'               => 'Tình trạng không được để trống!'
            ];
        }
}
