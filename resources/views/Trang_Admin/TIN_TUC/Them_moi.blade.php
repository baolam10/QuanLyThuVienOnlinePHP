@extends('Admin')
@section('Trang_Admin.main-admin-content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="row" style="margin-top: 50px;">
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
                                <form action="{{ route('trang-tin-tuc.xu-ly-cap-nhat', ['id' => $listSach->id]) }}" method="POST" enctype="multipart/form-data">
                                @else
                                <form action="{{ route('trang-tin-tuc.xu-ly-them-moi') }}" method="POST" id="userSach" enctype="multipart/form-data">
                                @endif
                                @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="TEN_HA" class="col-form-label">Hình Ảnh</label>
                                            <input type="file" class="form-control" id="filename" name="filename">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="TIEU_DE_TIN_TUC" class="col-form-label">Tiêu Đề Tin Tức</label>
                                            <input type="text" class="form-control" id="TIEU_DE_TIN_TUC" name="TIEU_DE_TIN_TUC" placeholder="Tiêu đề tin tức" @if(isset($listSach)) value="{{ $listSach->TIEU_DE_TIN_TUC }}" @endif  >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="NOI_DUNG_GIOI_THIEU" class="col-form-label">Nội dung Giới Thiệu</label>
                                            <input type="text" class="form-control" id="NOI_DUNG_GIOI_THIEU" name="NOI_DUNG_GIOI_THIEU" placeholder="Nội dung giới thiệu" @if(isset($listSach)) value="{{ $listSach->NOI_DUNG_GIOI_THIEU }}" @endif  >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="NOI_DUNG_CHINH" class="col-form-label">Nội dung chi tiết</label>
                                            <input type="text" class="form-control" id="NOI_DUNG_CHINH" name="NOI_DUNG_CHINH" placeholder="Nội dung toàn bộ tin tức" @if(isset($listSach)) value="{{ $listSach->NOI_DUNG_CHINH }}" @endif  >
                                        </div>
                                        <div class="form-group">
                                         <label for="THE_LOAI" class="col-form-label">Thể Loại</label>
                                            <select id="THE_LOAI" class="form-control" name="THE_LOAI" @if(isset($listSach)) value="{{ $listSach->THE_LOAI }}" @endif>
                                                <option>Tin Tức</option>
                                                <option>Sự Kiện</option>
                                            </select>
                                    </div>  
                                    </div>
                                                            
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">@if(isset($listSach)) Cập nhật @else Thêm @endif</button>
                                </form>

                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
              

@endsection                