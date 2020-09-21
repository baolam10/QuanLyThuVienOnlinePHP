@extends('Admin')
@section('Trang_Admin.main-admin-content')

<div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title">@if(isset($listPhieuPhat)) Cập nhật @else Thêm @endif THÊM THÔNG TIN PHIẾU PHẠT</h4>

                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <strong>{{ $errors->first() }}</strong>
                                    </div>
                                @elseif(isset($msg))
                                    <div class="alert alert-success">
                                        <strong>{{ $msg }}</strong>
                                    </div>
                                @endif
                                
                                @if(isset($listPhieuPhat))
                                <form action="{{ route('trang-phieu-phat.xu-ly-cap-nhat', ['id' => $listPhieuPhat->id]) }}" method="POST">
                                @else
                                <form action="{{ route('trang-phieu-phat.xu-ly-them-moi') }}" method="POST">
                                @endif
                                @csrf
                                    <div class="form-group">
                                        <label for="MA_PHIEU_PHAT">MÃ PHIẾU PHẠT</label>
                                        <input type="text" class="form-control" id="MA_PHIEU_PHAT" name="MA_PHIEU_PHAT" aria-describedby="emailHelp" placeholder="Mã Phiếu Phạt" @if(isset($listPhieuPhat)) value="{{ $listPhieuPhat->MA_PHIEU_PHAT }}" @endif >
                                    </div>
                                    <div class="form-group">
                                        <label for="MA_DOC_GIA">MÃ ĐỘC GIẢ</label>
                                        <input type="text" class="form-control" id="MA_DOC_GIA" name="MA_DOC_GIA" placeholder="Mã Độc Giả" @if(isset($listPhieuPhat)) value="{{ $listPhieuPhat->MA_DOC_GIA }}" @endif >
                                    </div>
                                    <div class="form-group">
                                        <label for="NGAY_MUON">NGÀY MƯỢN</label>
                                        <input type="date" class="form-control" id="NGAY_MUON" name="NGAY_MUON" placeholder="Ngày Mượn" @if(isset($listPhieuPhat)) value="{{ $listPhieuPhat->NGAY_MUON }}" @endif >
                                    </div>
                                    <div class="form-group mb-3">
                                            <label for="NGAY_TRA">NGÀY TRẢ</label>
                                            <input type="date" class="form-control" id="NGAY_TRA" name="NGAY_TRA" placeholder="Ngày Trả" @if(isset($listPhieuPhat)) value="{{ $listPhieuPhat->NGAY_TRA }}" @endif >
                                    </div>
                                    <div class="form-group">
                                    <label for="inputState" class="col-form-label">LÝ DO</label>
                                            <select id="LY_DO" class="form-control" name="LY_DO" @if(isset($listPhieuPhat)) value="{{ $listPhieuPhat->LY_DO }}" @endif>
                                                <option>BÌNH THƯỜNG</option>
                                                <option>Mất</option>
                                                <option>Hư</option>
                                                <option>THAY MỚI</option>
                                                <option>KHÁC</option>
                                            </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">@if(isset($listPhieuPhat)) Cập nhật @else Thêm @endif</button>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                </div>
@endsection                