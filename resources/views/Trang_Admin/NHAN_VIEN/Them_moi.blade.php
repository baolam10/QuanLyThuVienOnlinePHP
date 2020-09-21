@extends('Admin')
@section('Trang_Admin.main-admin-content')

<div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title">@if(isset($listNhanVienSP)) Cập nhật @else Thêm @endif THÊM THÔNG TIN NHÂN VIÊN</h4>

                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <strong>{{ $errors->first() }}</strong>
                                    </div>
                                @elseif(isset($msg))
                                    <div class="alert alert-success">
                                        <strong>{{ $msg }}</strong>
                                    </div>
                                @endif
                                
                                @if(isset($listNhanVienSP))
                                <form action="{{ route('trang-nhan-vien-ho-tro.xu-ly-cap-nhat', ['id' => $listNhanVienSP->id]) }}" method="POST">
                                @else
                                <form action="{{ route('trang-nhan-vien-ho-tro.xu-ly-them-moi') }}" method="POST">
                                @endif
                                @csrf
                                    <div class="form-group">
                                        <label for="MA_NHAN_VIEN">MÃ NHÂN VIÊN</label>
                                        <input type="text" class="form-control" id="MA_NHAN_VIEN" name="MA_NHAN_VIEN" aria-describedby="emailHelp" placeholder="Mã Nhân Viên (Phải nhập là số từ 0-9)" @if(isset($listNhanVienSP)) value="{{ $listNhanVienSP->MA_NHAN_VIEN }}" @endif >
                                    </div>
                                    <div class="form-group">
                                        <label for="HO_TEN">HỌ TÊN</label>
                                        <input type="text" class="form-control" id="HO_TEN" name="HO_TEN" placeholder="Họ Tên Nhân Viên" @if(isset($listNhanVienSP)) value="{{ $listNhanVienSP->HO_TEN }}" @endif >
                                    </div>
                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                            <label for="inputState" class="col-form-label">CV</label>
                                            <select id="CV" class="form-control" name="CV" @if(isset($listNhanVienSP)) value="{{ $listNhanVienSP->CV }}" @endif>
                                                <option>NHÂN VIÊN HỖ TRỢ</option>
                                            </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                            <label for="inputState" class="col-form-label">GIỚI TÍNH</label>
                                            <select id="GIOI_TINH" class="form-control" name="GIOI_TINH" @if(isset($listNhanVienSP)) value="{{ $listNhanVienSP->GIOI_TINH }}" @endif>
                                                <option>NAM</option>
                                                <option>NỮ</option>
                                                <option>KHÁC</option>
                                            </select>
                                    </div>
                                    </div>
                                    <div class="form-group mb-3">
                                                <label for="NGAY_SINH">NGÀY SINH</label>
                                                <input type="date" class="form-control" id="NGAY_SINH" name="NGAY_SINH" placeholder="Ngày Sinh" @if(isset($listNhanVienSP)) value="{{ $listNhanVienSP->NGAY_SINH }}" @endif >
                                    </div>
                                   
                                    <div class="form-group">
                                        <label for="MAT_KHAU">MẬT KHẨU</label>
                                        <input type="password" class="form-control" id="MAT_KHAU" name="MAT_KHAU" placeholder="Mật Khẩu" @if(isset($listNhanVienSP)) value="{{ $listNhanVienSP->MAT_KHAU }}" @endif >
                                    </div>
                                    <div class="form-group">
                                        <label for="SO_DIEN_THOAI">SỐ ĐIỆN THOẠI</label>
                                        <input type="number" class="form-control" id="SO_DIEN_THOAI" name="SO_DIEN_THOAI" placeholder="Số Điện Thoại" @if(isset($listNhanVienSP)) value="{{ $listNhanVienSP->SO_DIEN_THOAI }}" @endif >
                                    </div>
                                    <div class="form-group">
                                        <label for="EMAIL">EMAIL</label>
                                        <input type="email" class="form-control" id="EMAIL" name="EMAIL" placeholder="Email" @if(isset($listNhanVienSP)) value="{{ $listNhanVienSP->EMAIL }}" @endif >
                                    </div>
                                    <div class="form-group mb-3">
                                                <label for="NGAY_VAO_LAM">NGÀY VÀO LÀM</label>
                                                <input type="date" class="form-control" id="NGAY_VAO_LAM" name="NGAY_VAO_LAM" placeholder="Ngày Vào Làm" @if(isset($listNhanVienSP)) value="{{ $listNhanVienSP->NGAY_VAO_LAM }}" @endif >
                                    </div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">@if(isset($listNhanVienSP)) Cập nhật @else Thêm @endif</button>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                </div>
@endsection                