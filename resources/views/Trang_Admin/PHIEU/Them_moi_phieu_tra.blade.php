@extends('Admin')
@section('Trang_Admin.main-admin-content')

<!-- <form>
        <input type="text" name="search">
        <button type="submit">Search</button>
</form> -->
<div class="row">  
    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title">@if(isset($listPhieuTra)) Cập nhật @else Thêm @endif Thông Tin Phiếu Trả Với Mã Phiếu Mượn:<h3 style="color: red; font-style: bold;"> {{$PhieuMuon->MA_PHIEU_MUON}}</h3></h4>
                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <strong>{{ $errors->first() }}</strong>
                                    </div>
                                @elseif(isset($msg))
                                    <div class="alert alert-success">
                                        <strong>{{ $msg }}</strong>
                                    </div>
                                @endif
                                
                                @if(isset($listPhieuTra))
                                <form action="{{ route('trang-phieu-tra.xu-ly-cap-nhat', ['id' => $listPhieuTra->id]) }}" method="POST">
                                @else
                                <form action="{{ route('trang-phieu-tra.xu-ly-them-moi') }}" method="POST">
                                @endif
                                @csrf
                                    <div class="form-group">
                                        <label for="MA_PHIEU_MUON">MÃ PHIẾU MƯỢN</label>
                                        <input type="text" class="form-control" id="MA_PHIEU_MUON" name="MA_PHIEU_MUON" placeholder="Mã Phiếu Mượn"  @if(isset($PhieuMuon)) value="{{ $PhieuMuon->MA_PHIEU_MUON }}" @endif 
                                         @if(isset($listPhieuTra)) value="{{ $listPhieuTra->MA_PHIEU_MUON }}" @endif >
                                    </div>
                                    <div class="form-group">
                                        <label for="NGAY_TRA">NGÀY TRẢ</label>
                                        <input type="date" class="form-control" id="NGAY_TRA" name="NGAY_TRA" placeholder="Ngày Trả"  @if(isset($PhieuMuon)) value="{{ $PhieuMuon->HAN_TRA }}" @endif @if(isset($listPhieuTra)) value="{{ $listPhieuTra->NGAY_TRA }}" @endif >
                                    </div>
                                    
                                    <div class="form-group mb-3">
                                            <label for="MA_SACH">TỔNG SỐ LƯỢNG</label>
                                            <input type="text" class="form-control" id="MA_SACH" name="MA_SACH" placeholder="Mã Sách" @if(isset($PhieuMuon)) value="{{ $PhieuMuon->SO_LUONG }}" @endif @if(isset($listPhieuTra)) value="{{ $listPhieuTra->MA_SACH }}" @endif >
                                    </div>
                                    <h4>Thông Tin Chi Tiết Phiếu Trả</h4>
                                    @foreach($DetailPM as $key => $value)
                                        <div class="form-group">
                                            <label for="MA_SACH">MÃ SÁCH</label>
                                            <input type="text" class="form-control" id="MA_SACH_ITEM" name="MA_SACH_ITEM" placeholder="Mã Sách" @if(isset($key)) value="{{ $value->MA_SACH }}" @endif @if(isset($listPhieuTra)) value="{{ $listPhieuTra->NGAY_TRA }}" @endif >
                                        </div>
                                        <div class="form-group">
                                            <label for="SO_LUONG">SỐ LƯỢNG</label>
                                            <input type="text" class="form-control" id="SO_LUONG_ITEM" name="SO_LUONG_ITEM" placeholder="Số Lượng" @if(isset($key)) value="{{ $value->SO_LUONG }}" @endif @if(isset($listPhieuTra)) value="{{ $listPhieuTra->MA_NHAN_VIEN }}" @endif >
                                        </div>
                                        <div class="form-group mb-3">
                                                <label for="TINH_TRANG">TÌNH TRẠNG</label>
                                                <input type="text" class="form-control" id="TINH_TRANG_ITEM" name="TINH_TRANG_ITEM" placeholder="Tình Trạng" @if(isset($key)) value="{{ $value->TINH_TRANG }}" @endif @if(isset($listPhieuTra)) value="{{ $listPhieuTra->MA_SACH }}" @endif >
                                        </div>
                                        @endforeach
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">@if(isset($listPhieuTra)) Cập nhật @else Thêm @endif</button>
                                </form>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
    </div>
</div>
@endsection                