<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SlidesRequest extends FormRequest
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
            'TEN_HA'                =>  'mimes:jpeg,png,jpg|image|max:2028',
            'NOI_DUNG_GIOI_THIEU'   =>  'required|min:25',
        ];
    }

    public function messages()
    {
        return[
            'TEN_HA.image' => 'Định dạng không chính xác',
            'TEN_HA.mimes'  => 'Định dạng không chính xác',
            'TEN_HA.max'   => 'Kích thước file quá lớn',
            'NOI_DUNG_GIOI_THIEU.required'          => 'Nội dung không được để trống!',
            'NOI_DUNG_GIOI_THIEU.min'               => 'Nội dung phải từ 25 ký tự trở lên!',
        ];
    }
}
