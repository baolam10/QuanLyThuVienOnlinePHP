@extends('Admin')
@section('Trang_Admin.main-admin-content')

<div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title">@if(isset($listNhaXuatBan)) Cập nhật @else Thêm @endif THÊM THÔNG TIN NHÀ XUẤT BÁN</h4>

                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <strong>{{ $errors->first() }}</strong>
                                    </div>
                                @elseif(isset($msg))
                                    <div class="alert alert-success">
                                        <strong>{{ $msg }}</strong>
                                    </div>
                                @endif
                                
                                @if(isset($listNhaXuatBan))
                                <form action="{{ route('trang-nha-xuat-ban.xu-ly-cap-nhat', ['id' => $listNhaXuatBan->id]) }}" method="POST">
                                @else
                                <form action="{{ route('trang-nha-xuat-ban.xu-ly-them-moi') }}" method="POST">
                                @endif
                                 @csrf
                                    <div class="form-group">
                                        <label for="MA_NXB">MÃ NHÀ XUẤT BẢN</label>
                                        <input type="text" class="form-control" id="MA_NXB" name="MA_NXB" aria-describedby="emailHelp" placeholder="Mã Nhà Xuất Bản (Phải nhập số từ 0-9)" @if(isset($listNhaXuatBan)) value="{{ $listNhaXuatBan->MA_NXB }}" @endif >
                                    </div>
                                    <div class="form-group">
                                        <label for="TEN_NXB">TÊN NHÀ XUẤT BẢN</label>
                                        <input type="text" class="form-control" id="TEN_NXB" name="TEN_NXB" placeholder="Tên Nhà Xuất Bản" @if(isset($listNhaXuatBan)) value="{{ $listNhaXuatBan->TEN_NXB }}" @endif >
                                    </div>
                                    <div class="form-group">
                                        <label for="DIA_CHI">ĐỊA CHỈ</label>
                                        <input type="text" class="form-control" id="DIA_CHI" name="DIA_CHI" placeholder="Địa Chỉ" @if(isset($listNhaXuatBan)) value="{{ $listNhaXuatBan->DIA_CHI }}" @endif >
                                    </div>
                                    <div class="form-group">
                                        <label for="EMAIL">EMAIL</label>
                                        <input type="text" class="form-control" id="EMAIL" name="EMAIL" placeholder="Email" @if(isset($listNhaXuatBan)) value="{{ $listNhaXuatBan->EMAIL }}" @endif >
                                    </div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">@if(isset($listNhaXuatBan)) Cập nhật @else Thêm @endif</button>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                </div>
@endsection                