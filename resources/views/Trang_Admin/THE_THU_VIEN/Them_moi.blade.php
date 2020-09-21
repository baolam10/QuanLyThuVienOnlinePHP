@extends('Admin')
@section('Trang_Admin.main-admin-content')

<div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title">@if(isset($listTheThuVien)) Cập nhật @else Thêm @endif THÊM THÔNG TIN THẺ THƯ VIEN</h4>

                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <strong>{{ $errors->first() }}</strong>
                                    </div>
                                @elseif(isset($msg))
                                    <div class="alert alert-success">
                                        <strong>{{ $msg }}</strong>
                                    </div>
                                @endif
                                
                                @if(isset($listTheThuVien))
                                <form action="{{ route('trang-the-thu-vien.xu-ly-cap-nhat', ['id' => $listTheThuVien->id]) }}" method="POST">
                                @else
                                <form action="{{ route('trang-the-thu-vien.xu-ly-them-moi') }}" method="POST">
                                @endif
                                 @csrf

                                    <div class="form-group">
                                        <label for="MA_SO_THE">MÃ SỐ THẺ</label>
                                        <input type="text" class="form-control" id="MA_SO_THE" name="MA_SO_THE" aria-describedby="emailHelp" placeholder="Mã Số Thẻ" @if(isset($listTheThuVien)) value="{{ $listTheThuVien->MA_SO_THE }}" @endif >
                                    </div>
                                    <div class="form-group mb-3">
                                            <label for="NGAY_BAT_DAU">NGÀY BẮT ĐẦU</label>
                                            <input type="date" class="form-control" id="NGAY_BAT_DAU" name="NGAY_BAT_DAU" placeholder="Ngày Bắt Đầu" @if(isset($listTheThuVien)) value="{{ $listTheThuVien->NGAY_BAT_DAU }}" @endif >
                                    </div>
                                    <div class="form-group mb-3">
                                            <label for="NGAY_HET_HAN">NGÀY HẾT HẠN</label>
                                            <input type="date" class="form-control" id="NGAY_HET_HAN" name="NGAY_HET_HAN" placeholder="Ngày Hết Hạn" @if(isset($listTheThuVien)) value="{{ $listTheThuVien->NGAY_HET_HAN }}" @endif >
                                    </div>
                                    <div class="form-group mb-3">
                                            <label for="inputState" class="col-form-label">TÌNH TRẠNG</label>
                                            <select id="GHI_CHU" class="form-control" name="GHI_CHU" @if(isset($listTheThuVien)) value="{{ $listTheThuVien->GHI_CHU }}" @endif>
                                                <option>BÌNH THƯỜNG</option>
                                                <option>THẤT LẠC</option>
                                                <option>THAY MỚI</option>
                                                <option>KHÁC</option>
                                            </select>
                                        </div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">@if(isset($listTheThuVien)) Cập nhật @else Thêm @endif</button>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                </div>
@endsection                