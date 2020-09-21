<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TinTucRequest extends FormRequest
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
            'TEN_HA'                =>  'mimes:jpg,jpeg,png',
            'TIEU_DE_TIN_TUC'       =>  'required|min:20',
            'NOI_DUNG_GIOI_THIEU'   =>  'required|min:25',
            'NOI_DUNG_CHINH'   =>  'required'
        ];
    }

    public function messages()
    {
        return[

            'TEN_HA.mimes'                  => 'Định dạng file không hợp lệ!',
            'TIEU_DE_TIN_TUC.required'      => 'Tiêu đề không được để trống!',
            'TIEU_DE_TIN_TUC.min'           => 'Tiêu đề phải từ 20 ký tự trở lên!',
            'NOI_DUNG_GIOI_THIEU.required'  => 'Nội dung không được để trống!',
            'NOI_DUNG_GIOI_THIEU.min'       => 'Nội dung phải từ 25 ký tự trở lên!',
            'NOI_DUNG_CHINH.required'       => 'Nội dung không được để trống!',
        ];
    }
}
