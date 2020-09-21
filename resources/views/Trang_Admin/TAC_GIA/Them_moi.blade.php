@extends('Admin')
@section('Trang_Admin.main-admin-content')

<div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title">@if(isset($listTacGia)) Cập nhật @else Thêm @endif THÊM THÔNG TIN TÁC GIẢ</h4>

                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <strong>{{ $errors->first() }}</strong>
                                    </div>
                                @elseif(isset($msg))
                                    <div class="alert alert-success">
                                        <strong>{{ $msg }}</strong>
                                    </div>
                                @endif
                                
                                @if(isset($listTacGia))
                                <form action="{{ route('trang-tac-gia.xu-ly-cap-nhat', ['id' => $listTacGia->id]) }}" method="POST">
                                @else
                                <form action="{{ route('trang-tac-gia.xu-ly-them-moi') }}" method="POST">
                                @endif
                                @csrf
                                    <div class="form-group">
                                        <label for="MA_TAC_GIA">MÃ TÁC GIẢ</label>
                                        <input type="text" class="form-control" id="MA_TAC_GIA" name="MA_TAC_GIA" aria-describedby="emailHelp" placeholder="Mã Tác Giả (Phải nhập ký tự số từ 0-9)" @if(isset($listTacGia)) value="{{ $listTacGia->MA_TAC_GIA }}" @endif >
                                    </div>
                                    <div class="form-group">
                                        <label for="TEN_TAC_GIA">TÊN TÁC GIẢ</label>
                                        <input type="text" class="form-control" id="TEN_TAC_GIA" name="TEN_TAC_GIA" placeholder="Tên Tác Giả" @if(isset($listTacGia)) value="{{ $listTacGia->TEN_TAC_GIA }}" @endif >
                                    </div>
                                    <div class="form-group">
                                        <label for="WEBSITE">WEBSITE TÁC GIẢ</label>
                                        <input type="text" class="form-control" id="WEBSITE" name="WEBSITE" placeholder="Website" @if(isset($listTacGia)) value="{{ $listTacGia->WEBSITE }}" @endif>
                                    </div>
                                    <div class="form-group">
                                        <label for="GHI_CHU">GHI CHÚ</label>
                                        <input type="text" class="form-control" id="GHI_CHU" name="GHI_CHU" placeholder="Ghi Chú Thông Tin Tác Giả (*Nếu cần*)" @if(isset($listTacGia)) value="{{ $listTacGia->GHI_CHU }}" @endif>
                                    </div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">@if(isset($listTacGia)) Cập nhật @else Thêm @endif</button>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                </div>
@endsection                