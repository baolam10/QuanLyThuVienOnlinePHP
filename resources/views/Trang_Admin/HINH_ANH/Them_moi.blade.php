@extends('Admin')
@section('Trang_Admin.main-admin-content')

<div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title">THÊM HÌNH ẢNH</h4>
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">MÃ HÌNH ẢNH</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mã Nhà Xuất Bản">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">TÊN HÌNH ẢNH</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Tên Nhà Xuất Bản">
                                    </div>
                                    <div class="form-group mb-0">
                                        <label>Chọn Hình Ảnh</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile04">
                                                <label class="custom-file-label" for="inputGroupFile04">Chọn File</label>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Thêm</button>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                </div>
@endsection                