<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhieuPhatRequest extends FormRequest
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
            'MA_PHIEU_PHAT'     =>  'bail|required|max:50|min:4|unique:PHIEU_PHAT',   
            'MA_DOC_GIA'        =>  'bail|required|max:100|min:3|unique:PHIEU_PHAT',   
            "NGAY_MUON"         =>  'bail|required',
            "NGAY_TRA"          =>  'bail|required|after_or_equal:date|after:now',
            "LY_DO"             =>  'bail|required'
        ];
    }

    public function messages()
    {
        return[
            'MA_PHIEU_PHAT.required'    => 'Mã phiếu phạt không được để trống',
            'MA_PHIEU_PHAT.min'         => 'Mã phiếu phạt phải từ 4 ký tự trở lên!',
            'MA_PHIEU_PHAT.max'         => 'Mã phiếu phạt phải từ 50 ký tự trở xuống!',
            'MA_PHIEU_PHAT.unique'      => 'Mã phiếu phạt đã tồn tại',
            'MA_DOC_GIA.required'       => 'Mã đọc giả không được để trống',
            'MA_DOC_GIA.unique'         => 'Mã đọc giả đã tồn tại',
            'MA_DOC_GIA.min'            => 'Mã đọc giả phải từ 3 ký tự trở lên!',
            'MA_DOC_GIA.max'            => 'Mã đọc giả phải từ 100 ký tự trở xuống!',
            'NGAY_MUON.required'        => 'Ngày mượn không được để trống',
            'NGAY_TRA.unique'           => 'Ngày trả đã tồn tại',
            'NGAY_TRA.after'            => 'Ngày trả phải lớn hơn ngày mượn!',
            'LY_DO.required'            => 'Lý do không được để trống'
        ];
    }
}
