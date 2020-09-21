@extends('Admin')
@section('Trang_Admin.main-admin-content')

<div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title">@if(isset($listDocGia)) Cập nhật @else Thêm @endif THÊM THÔNG TIN ĐỘC GIẢ</h4>

                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <strong>{{ $errors->first() }}</strong>
                                    </div>
                                @elseif(isset($msg))
                                    <div class="alert alert-success">
                                        <strong>{{ $msg }}</strong>
                                    </div>
                                @endif
                                
                                @if(isset($listDocGia))
                                <form action="{{ route('trang-doc-gia.xu-ly-cap-nhat', ['id' => $listDocGia->id]) }}" method="POST">
                                @else
                                <form action="{{ route('trang-doc-gia.xu-ly-them-moi') }}" method="POST">
                                @endif
                                 @csrf
                                    <div class="form-group">
                                        <label for="TEN_DOC_GIA">TÊN ĐỘC GIẢ</label>
                                        <input type="text" class="form-control" id="TEN_DOC_GIA" name="TEN_DOC_GIA" placeholder="Tên Độc Giả" @if(isset($listDocGia)) value="{{ $listDocGia->TEN_DOC_GIA }}" @endif >
                                    </div>
                                    <div class="form-group">
                                        <label for="DIA_CHI">ĐỊA CHỈ</label>
                                        <input type="text" class="form-control" id="DIA_CHI" name="DIA_CHI" placeholder="Địa Chỉ" @if(isset($listDocGia)) value="{{ $listDocGia->DIA_CHI }}" @endif >
                                    </div>
                                    <div class="form-group">
                                        <label for="MA_SO_THE">MÃ SỐ THẺ</label>
                                        <input type="text" class="form-control" id="MA_SO_THE" name="MA_SO_THE" placeholder="Mã Số Thẻ" @if(isset($listDocGia)) value="{{ $listDocGia->MA_SO_THE }}" @endif >
                                    </div>
                                    <div class="form-group mb-3">
                                            <label for="inputState" class="col-form-label">GIỚI TÍNH</label>
                                            <select id="GIOI_TINH" class="form-control" name="GIOI_TINH" @if(isset($listDocGia)) value="{{ $listDocGia->GIOI_TINH }}" @endif>
                                                <option>NAM</option>
                                                <option>NỮ</option>
                                               
                                                <option>KHÁC</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        <label for="MAT_KHAU">MẬT KHẨU</label>
                                        <input type="password" class="form-control" id="MAT_KHAU" name="MAT_KHAU" placeholder="PassWord" @if(isset($listDocGia)) value="{{ $listDocGia->MAT_KHAU }}" @endif >
                                    </div>
                                    <div class="form-group">
                                        <label for="EMAIL">EMAIL</label>
                                        <input type="email" class="form-control" id="EMAIL" name="EMAIL" placeholder="Email" @if(isset($listDocGia)) value="{{ $listDocGia->EMAIL }}" @endif >
                                    </div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">@if(isset($listDocGia)) Cập nhật @else Thêm @endif</button>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                </div>
@endsection                