<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhieuTraRequest extends FormRequest
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
            // 'MA_PHIEU_TRA'          =>  'bail|required|max:20|min:3|alpha_dash|unique:PHIEU_TRA',   
            // 'MA_PHIEU_MUON'         =>  'bail|required|max:20|min:3|alpha_dash|unique:PHIEU_TRA',   
            // 'NGAY_TRA'              =>  'bail|required|after_or_equal:date|after:now',
            //'MA_NHAN_VIEN'          =>  'required|alpha_dash',
            // 'MA_SACH'               =>  'bail|required|max:20|min:3|alpha_dash|unique:PHIEU_TRA',
            // 'TINH_TRANG'            =>  'bail|required'

        ];
    }

    public function messages()
    {
        return[
            // 'MA_PHIEU_TRA.required'         => 'Mã phiếu trả không được để trống',
            // 'MA_PHIEU_TRA.alpha_dash'       => 'Mã phiếu trả không chứa các ký tự đặc biệt!',
            // 'MA_PHIEU_TRA.unique'           => 'Mã phiếu trả đã tồn tại',
            // 'MA_PHIEU_TRA.min'              => 'Mã phiếu trả phải từ 3 ký tự trở lên!',
            // 'MA_PHIEU_TRA.max'              => 'Mã phiếu trả phải dưới 20 ký tự trở xuống!',
            // 'MA_PHIEU_MUON.required'        => 'Mã phiếu mượn không được để trống',
            // 'MA_PHIEU_MUON.unique'          => 'Mã phiếu mượn đã tồn tại',
            // 'MA_PHIEU_MUON.alpha_dash'      => 'Mã phiếu mượn không chứa các ký tự đặc biệt!',
            // 'MA_PHIEU_MUON.min'             => 'Mã phiếu mượn phải từ 3 ký tự trở lên!',
            // 'MA_PHIEU_MUON.max'             => 'Mã phiếu mượn phải dưới 20 ký tự trở xuống!',
            // 'NGAY_TRA.required'             => 'Ngày trả không được để trống',
            // 'NGAY_TRA.after'                => 'Ngày trả phải lớn hơn ngày hiện tại!',
            //'MA_NHAN_VIEN.required'         => 'Mã nhân viên không được để trống',
            // 'MA_NHAN_VIEN.unique'           => 'Mã nhân viên đã tồn tại!',
            // 'MA_NHAN_VIEN.min'              => 'Mã nhân viên phải từ 3 ký tự trở lên!',
            // 'MA_NHAN_VIEN.max'              => 'Mã nhân viên phải dưới 20 ký tự trở xuống!',
            //'MA_NHAN_VIEN.alpha_dash'       => 'Mã nhân viên không chứa các ký tự đặc biệt!',
            // 'MA_SACH.required'              => 'Mã sách không được để trống',
            // 'MA_SACH.unique'                => 'Mã sách đã tồn tại',
            // 'MA_SACH.min'                   => 'Mã sách phải từ 3 ký tự trở lên!',
            // 'MA_SACH.max'                   => 'Mã sách phải dưới 20 ký tự trở xuống!',
            // 'MA_SACH.alpha_dash'            => 'Mã sách không chứa các ký tự đặc biệt!',
            // 'TINH_TRANG.required'           => 'Tình trạng không được để trống'
        ];
    }
}
