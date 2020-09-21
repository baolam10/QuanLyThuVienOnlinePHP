@extends('Admin')
@section('Trang_Admin.main-admin-content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">@if(isset($listSach)) Cập nhật @else Thêm @endif THÔNG TIN SÁCH</h4>

                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <strong>{{ $errors->first() }}</strong>
                                    </div>
                                @elseif(isset($msg))
                                    <div class="alert alert-success">
                                        <strong>{{ $msg }}</strong>
                                    </div>
                                @endif
                                
                                @if(isset($listSach))
                                <form action="{{ route('trang-sach.xu-ly-cap-nhat', ['id' => $listSach->id]) }}" method="POST">
                                @else
                                <form action="{{ route('trang-sach.xu-ly-them-moi') }}" method="POST" id="userSach">
                                @endif
                                @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="MA_SACH" class="col-form-label">MÃ SÁCH</label>
                                            <input type="text" class="form-control" id="MA_SACH" name="MA_SACH" placeholder="Mã Sách" @if(isset($listSach)) value="{{ $listSach->MA_SACH }}" @endif >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="MA_TAC_GIA" class="col-form-label">TÊN TÁC GIẢ</label>
                                            <select class="form-control" id="MA_TAC_GIA" name="MA_TAC_GIA">
                                                @if (isset($listTacgia))
                                                    @foreach($listTacgia as $DanhSach)
                                                        <option @if(isset($listSach) && $DanhSach->id == $listSach->MA_TAC_GIA) selected @endif value="{{ $DanhSach->id }}"> {{ $DanhSach->TEN_TAC_GIA }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            {{-- <input type="text" class="form-control" id="MA_TAC_GIA" name="MA_TAC_GIA" placeholder="Mã Tác Giả" @if(isset($listSach)) value="{{ $listSach->MA_TAC_GIA }}" @endif  > --}}
                                        </div>
                                    </div>
                                    
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="TEN_SACH" class="col-form-label">TÊN SÁCH</label>
                                            <input type="text" class="form-control" id="TEN_SACH" name="TEN_SACH" @if(isset($listSach)) value="{{ $listSach->TEN_SACH }}" @endif placeholder="Tên Sách" >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="MA_THE_LOAI" class="col-form-label">TÊN THỂ LOẠI</label>
                                            <select class="form-control" id="MA_THE_LOAI" name="MA_THE_LOAI">
                                                @if (isset($listTheloai))
                                                    @foreach($listTheloai as $DanhSach)
                                                        <option @if(isset($listSach) && $DanhSach->id == $listSach->MA_THE_LOAI) selected @endif value="{{ $DanhSach->id }}"> {{ $DanhSach->TEN_THE_LOAI }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            {{-- <input type="text" class="form-control" id="MA_THE_LOAI" name="MA_THE_LOAI" placeholder="Mã Thể Loại" @if(isset($listSach)) value="{{ $listSach->MA_THE_LOAI }}" @endif> --}}
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="MA_NXB" class="col-form-label">TÊN NHÀ XUẤT BẢN</label>
                                            <select class="form-control" id="MA_NXB" name="MA_NXB">
                                                @if (isset($listNhaxuatban))
                                                    @foreach($listNhaxuatban as $DANHSACH)
                                                        <option @if(isset($listSach) && $DANHSACH->id == $listSach->MA_NXB) selected @endif value="{{ $DANHSACH->id }}"> {{ $DANHSACH->TEN_NXB }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            {{-- <input type="text" class="form-control" id="MA_NXB" name="MA_NXB" placeholder="Mã Nhà Xuất Bản" @if(isset($listSach)) value="{{ $listSach->MA_NXB }}" @endif > --}}
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="MA_HA" class="col-form-label">MÃ HÌNH ẢNH</label>
                                            <input type="text" class="form-control" id="MA_HA" name="MA_HA" placeholder="Mã Hình Ảnh" @if(isset($listSach)) value="{{ $listSach->MA_HA }}" @endif>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="NAM_XUAT_BAN" class="col-form-label">NẮM XUẤT BẢN</label>
                                            <input type="number" class="form-control" id="NAM_XUAT_BAN" name="NAM_XUAT_BAN" placeholder="Năm xuất Bản" @if(isset($listSach)) value="{{ $listSach->NAM_XUAT_BAN }}" @endif>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="SO_LUONG" class="col-form-label">SỐ LƯỢNG</label>
                                            <input oninput="check()" minLength="0" type="number" class="form-control" id="SO_LUONG" name="SO_LUONG" placeholder="Số Lượng" @if(isset($listSach)) value="{{ $listSach->SO_LUONG }}" @endif>
                                            <script>
                                                function check()
                                                    {
                                                        var vNumber = Document.GetElementByID("SO_LUONG");
                                                        if(vNumber < 0) return false;
                                                        else 
                                                        return true;
                                                    };
                                            </script>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="NOI_DUNG_GIOI_THIEU" class="col-form-label">NỘI DUNG GIỚI THIỆU</label>
                                            <input type="text" class="form-control" id="NOI_DUNG_GIOI_THIEU" name="NOI_DUNG_GIOI_THIEU" placeholder="Nội dung giới thiệu" @if(isset($listSach)) value="{{ $listSach->NOI_DUNG_GIOI_THIEU }}" @endif>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="NOI_DUNG_CHINH" class="col-form-label">NỘI DUNG CHÍNH</label>
                                            <input type="text" class="form-control" id="NOI_DUNG_CHINH" name="NOI_DUNG_CHINH" placeholder="Nội dung chính" @if(isset($listSach)) value="{{ $listSach->NOI_DUNG_CHINH }}" @endif>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <label for="TINH_TRANG" class="col-form-label">TÌNH TRẠNG SÁCH</label>
                                            <select id="TINH_TRANG" class="form-control" name="TINH_TRANG" @if(isset($listSach)) value="{{ $listSach->TINH_TRANG }}" @endif>
                                                <option>Bình Thường</option>
                                                <option>Sách Mới</option>
                                                <option>Hư Hỏng</option>
                                                <option>Thất Lạc</option>
                                                <option>Khác</option>
                                            </select>
                                    </div>                           
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">@if(isset($listSach)) Cập nhật @else Thêm @endif</button>
                                </form>

                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
              

@endsection                