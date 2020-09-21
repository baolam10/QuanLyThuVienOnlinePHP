@extends('Admin')
@section('Trang_Admin.main-admin-content')

<div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title">@if(isset($listPhieuMuon)) Cập nhật @else Thêm @endif THÊM THÔNG TIN PHIẾU MƯỢN</h4>

                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <strong>{{ $errors->first() }}</strong>
                                    </div>
                                @elseif(isset($msg))
                                    <div class="alert alert-success">
                                        <strong>{{ $msg }}</strong>
                                    </div>
                                @endif
                                
                                @if(isset($listPhieuMuon))
                                <form action="{{ route('trang-phieu-muon.xu-ly-cap-nhat', ['id' => $listPhieuMuon->id]) }}" method="POST">
                                @else
                                <form action="{{ route('trang-phieu-muon.xu-ly-them-moi') }}" method="POST">
                                @endif
                                @csrf
                                    <div class="form-group">
                                        <label for="MA_PHIEU_MUON">MÃ PHIẾU MƯỢN</label>
                                        <input type="text" class="form-control" id="MA_PHIEU_MUON" name="MA_PHIEU_MUON" aria-describedby="emailHelp" placeholder="Mã Phiếu Mượn" @if(isset($listPhieuMuon)) value="{{ $listPhieuMuon->MA_PHIEU_MUON }}" @endif >
                                    </div>
                                    <div class="form-group">
                                        <label for="MA_SO_THE">MÃ SỐ THẺ</label>
                                        <input type="text" class="form-control" id="MA_SO_THE" name="MA_SO_THE" placeholder="Mã Số Thẻ" @if(isset($listPhieuMuon)) value="{{ $listPhieuMuon->MA_SO_THE }}" @endif >
                                    </div>
                                    <div class="form-group">
                                        <label for="SO_LUONG">SỐ LƯỢNG</label>
                                        <input type="text" class="form-control" id="SO_LUONG" name="SO_LUONG" placeholder="Số Lượng" @if(isset($listPhieuMuon)) value="{{ $listPhieuMuon->SO_LUONG }}" @endif >
                                    </div>
                                    <div class="form-group mb-3">
                                            <label for="NGAY_MUON">NGÀY MƯỢN</label>
                                            <input type="date" class="form-control" id="NGAY_MUON" name="NGAY_MUON" placeholder="Ngày Mượn" @if(isset($listPhieuMuon)) value="{{ $listPhieuMuon->NGAY_MUON }}" @endif >
                                    </div>
                                    <div class="form-group mb-3">
                                            <label for="HAN_TRA">HẠN TRẢ</label>
                                            <input type="date" class="form-control" id="HAN_TRA" name="HAN_TRA" placeholder="Hạn Trả" @if(isset($listPhieuMuon)) value="{{ $listPhieuMuon->HAN_TRA }}" @endif >
                                    </div>
                                    <div class="form-group">
                                        <label for="TINH_TRANG" class="col-form-label">TÌNH TRẠNG SÁCH</label>
                                                <select id="TINH_TRANG" class="form-control" name="TINH_TRANG" @if(isset($listPhieuMuon)) value="{{ $listPhieuMuon->TINH_TRANG }}" @endif>
                                                    <option>Đã Trả</option>
                                                    <option>Chưa Trả</option>
                                                </select>
                                        </div> 
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">@if(isset($listPhieuMuon)) Cập nhật @else Thêm @endif</button>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                </div>
@endsection                