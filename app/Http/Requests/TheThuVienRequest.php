<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TheThuVienRequest extends FormRequest
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
            'MA_SO_THE'         =>  'bail|required|min:0|integer|unique:THE_THU_VIEN',   
            "NGAY_BAT_DAU"      =>  'bail|required',
            "NGAY_HET_HAN"      =>  'bail|required|after_or_equal:date|after:now',
            "GHI_CHU"           =>  'bail|required'

        ];
    }

    public function messages()
    {
        return[
            'MA_SO_THE.required'        => 'Mã số thẻ không được để trống!',
            'MA_SO_THE.unique'          => 'Mã số thẻ đã tồn tại!',
            'MA_SO_THE.integer'         => 'Mã số thẻ phải là số nguyên!',
            'MA_SO_THE.min'             => 'Mã số thẻ phải từ 3 ký tự trở lên!',
            'MA_SO_THE.max'             => 'Mã số thẻ phải từ 50 ký tự trở xuống!',
            'NGAY_BAT_DAU.required'     => 'Ngày bắt đầu không được để trống!',
            'NGAY_HET_HAN.required'     => 'Ngày hết hạn không được để trống!',
            'NGAY_HET_HAN.after'        => 'Ngày hết hạn phải lớn hơn ngày bắt đầu!',
            'GHI_CHU.required'          => 'Ghi chú không được để trống!'
        ];
    }
}
