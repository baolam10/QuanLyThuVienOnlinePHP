
@extends('Admin')
@section('Trang_Admin.main-admin-content')

<div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title">@if(isset($listTheLoai)) Cập nhật @else Thêm @endif THÊM THÔNG TIN TÁC GIẢ</h4>
                                
                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <strong>{{ $errors->first() }}</strong>
                                    </div>
                                @elseif(isset($msg))
                                    <div class="alert alert-success">
                                        <strong>{{ $msg }}</strong>
                                    </div>
                                @endif

                                @if(isset($listTheLoai))
                                <form action="{{ route('trang-the-loai.xu-ly-cap-nhat', ['id' => $listTheLoai->id]) }}" method="POST">
                                @else
                                <form action="{{ route('trang-the-loai.xu-ly-them-moi') }}" method="POST">
                                @endif
                                @csrf
                                <div class="form-group">
                                        <label for="MA_THE_LOAI">MÃ THỂ LOẠI</label>
                                        <input type="text" class="form-control" id="MA_THE_LOAI" name="MA_THE_LOAI" placeholder="Mã Thể Loại (Phải nhập ký tự số từ 0-9)" @if(isset($listTheLoai)) value="{{ $listTheLoai->MA_THE_LOAI }}" @endif>
                                    </div>
                                    <div class="form-group">
                                        <label for="TEN_THE_LOAI">TÊN THỂ LOẠI</label>
                                        <input type="text" class="form-control" id="TEN_THE_LOAI" name="TEN_THE_LOAI" placeholder="Tên Thể Loại" @if(isset($listTheLoai)) value="{{ $listTheLoai->TEN_THE_LOAI }}" @endif>
                                    </div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">@if(isset($listTheLoai)) Cập nhật @else Thêm @endif</button>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                </div>
@endsection                