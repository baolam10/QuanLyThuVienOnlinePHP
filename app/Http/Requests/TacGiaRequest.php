<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TacGiaRequest extends FormRequest
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
            'MA_TAC_GIA'    =>  'bail|required|max:10000|min:0|integer|regex:/[^#&<>.,()\[\]*`\-=@"~!:;$^%{}?]$/|unique:TAC_GIA',   
            'TEN_TAC_GIA'   =>  'bail|required|max:100|min:5|regex:/[^#&<>.,()\[\]*`\-=@"~!:;$^%{}?]$/'
        ];
    }

    public function messages()
        {
            return[
                'MA_TAC_GIA.required'   => 'Mã tác giả không được để trống!',
                'MA_TAC_GIA.unique'     => 'Mã tác giả đã tồn tại!',
                'MA_TAC_GIA.regex'      => 'Mã tác giả không được chứa các ký tự đặc biệt!',
                'MA_TAC_GIA.integer'    => 'Mã tác giả bắt buộc phải là số nguyên!',
                'MA_TAC_GIA.min'        => 'Mã tác giả bắt buộc phải lớn hơn 0!',
                'MA_TAC_GIA.max'        => 'Mã tác giả bắt buộc phải nhỏ hơn 10000!',
                'TEN_TAC_GIA.required'  => 'Tên tác giả không được để trống!',
                'TEN_TAC_GIA.regex'     => 'Tên tác giả không chứa ký tự đặc biệt!',
                'TEN_TAC_GIA.min'       => 'Tên tác giả bắt buộc phải từ 5 ký tự trở lên!',
                'TEN_TAC_GIA.max'       => 'Tên tác giả bắt buộc phải dưới 100 ký tự trở xuống!'
            ];
        }
}
