<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TheLoaiRequest extends FormRequest
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
            'MA_THE_LOAI'       =>  'bail|required|max:1000|min:0|integer|regex:/[^#&<>.,()\[\]*`\-=@"~!:;$^%{}?]$/|unique:THE_LOAI',
            'TEN_THE_LOAI'      =>  'bail|required|max:50|min:3|regex:/[^#&<>.,()\[\]*`\-=@"~!:;$^%{}?]$/'

        ];
    }
    public function messages()
    {
        return[
            'MA_THE_LOAI.required'      => 'Mã thể loại không được để trống!',
            'MA_THE_LOAI.unique'        => 'Mã thể loại đã tồn tại!',
            'MA_THE_LOAI.regex'         => 'Mã thể loại không chứa các ký tự đặc biệt!',
            'MA_THE_LOAI.integer'      => 'Mã thể loại phải là số nguyên!',
            'MA_THE_LOAI.min'           => 'Mã thể loại phải lớn hơn 0!',
            'MA_THE_LOAI.max'           => 'Mã thể loại phải nhỏ hơn 1000!',
            'TEN_THE_LOAI.required'     => 'Tên thể loại không được để trống!',
            'TEN_THE_LOAI.regex'        => 'Tên thể loại không chứa ký tự đặc biệt!',
            'TEN_THE_LOAI.min'          => 'Tên thể loại phải từ 3 ký tự trở lên!',
            'TEN_THE_LOAI.max'          => 'Tên thể loại phải từ 50 ký tự trở xuống!'
        ];
    }
}
