<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhieuMuonRequest extends FormRequest
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
            'MA_PHIEU_MUON'         =>  'bail|required|max:100|min:2|regex:/[^#&<>.,+()\[\]*`\-=@"~!:;$^%{}?]$/|unique:PHIEU_MUON',   
            'MA_SO_THE'             =>  'bail|required|max:9999999999|min:5|integer',   
            'SO_LUONG'              =>  'bail|required|max:10|min:0|integer',
            // 'MA_NHAN_VIEN'          =>  'bail|required|max:50|min:4|regex:/[^#&<>.,a-z()\[\]*`\-=@"~!:;$^%{}?]$/|unique:PHIEU_MUON',
            'NGAY_MUON'             =>  'bail|required|after:now',
            'HAN_TRA'               =>  'bail|required|after:now',
            // 'TINH_TRANG'            =>  'bail|required'
        ];
    }

    public function messages()
    {
        return[
            'MA_PHIEU_MUON.required'    => 'Mã phiếu mượn không được để trống',
            'MA_PHIEU_MUON.unique'      => 'Mã phiếu mượn đã tồn tại',
            'MA_PHIEU_MUON.regex'       => 'Mã phiếu mượn không chứa các ký tự đặc biệt!',
            'MA_PHIEU_MUON.min'         => 'Mã phiếu mượn phải từ 2 ký tự trở lên!',
            'MA_PHIEU_MUON.max'         => 'Mã phiếu mượn phải từ 100 ký tự trở xuống!',
            // 'MA_SO_THE.required'        => 'Mã số thẻ không được để trống',
            'MA_SO_THE.integer'         => 'Mã số thẻ phải là số nguyên!',
            'MA_SO_THE.min'             => 'Mã số thẻ phải từ 5 số trở lên!',
            'MA_SO_THE.max'             => 'Mã số thẻ phải từ 10 số trở xuống!',
            // 'MA_SACH.required'          => 'Mã sách không được để trống',
            // 'MA_SACH.unique'            => 'Mã sách đã tồn tại!',
            // 'MA_SACH.regex'             => 'Mã sách không chứa các ký tự đặc biệt!',
            // 'MA_SACH.min'               => 'Mã sách phải từ 5 ký tự trở lên!',
            // 'MA_SACH.max'               => 'Mã sách phải từ 200 ký tự trở xuống!',
            // 'MA_NHAN_VIEN.required'     => 'Mã nhân viên không được để trống',
            // 'MA_NHAN_VIEN.regex'        => 'Mã nhân viên không chứa các ký tự đặc biệt!',
            // 'MA_NHAN_VIEN.unique'       => 'Mã nhân viên đã tồn tại!',
            // 'MA_NHAN_VIEN.min'          => 'Mã nhân viên phải từ 4 ký tự trở lên!',
            // 'MA_NHAN_VIEN.max'          => 'Mã nhân viên phải từ 50 ký tự trở xuống!',
            'SO_LUONG.required'         => 'Số lượng không được để trống!',
            'SO_LUONG.min'              => 'Số lượng phải từ 0 trở lên!',
            'SO_LUONG.max'              => 'Số lượng phải dưới 10 trở xuống!',
            'NGAY_MUON.required'        => 'Ngày mượn không được để trống',
            'NGAY_MUON.after'           => 'Ngày mượn không nhỏ hơn ngày hiện tại',
            'HAN_TRA.required'          => 'Hạn trả không được để trống',
            'HAN_TRA.after'             => 'Hạn trả phải lớn hơn ngày mượn!'
            // 'TINH_TRANG.required'       => 'Tình trạng không được để trống'
        ];
    }
}
