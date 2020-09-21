@extends('Admin')
@section('css')
<!-- third party css -->
<link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<!-- third party css end -->
@endsection
@section('js')
<!-- third party js -->
<script src="{{ asset('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.flash.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.select.min.js') }}"></script>
<script src="{{ asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/libs/pdfmake/vfs_fonts.js') }}"></script>
<!-- Datatables init -->
<script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>
<!-- sweet alert -->
<script src= "{{ asset('assets/js/pages/initialize/xoa.js') }}"></script>
<!-- third party js ends -->

@endsection
@section('Trang_Admin.main-admin-content')
@if (session('flash_message'))
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
    <script type="text/javascript">
        swal("Xóa Thành Công!","Chọn OK để tiếp tục!","success");
    </script>
@endif
@if (session('flash_message_restore'))
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
    <script type="text/javascript">
        swal("Phục Hồi Thành Công!","Chọn OK để tiếp tục!","success");
    </script>
@endif
|<!-- start page title -->
                <div class="row" style="margin-top: 50px;">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Danh Sách</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Bảng</a></li>
                                    <li class="breadcrumb-item active">Dữ liệu</li>
                                </ol>
                            </div>
                            {{-- <h4 class="page-title">Số liệu sách</h4> --}}
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                <div class="row" >
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="{{route('trang-tin-tuc.danh-sach-restore')}}" class="btn btn-danger waves-effect waves-light" style="margin-bottom:10px" ><i class="fas fa-recycle"></i></a> 
                                <a href="{{route('trang-tin-tuc.them-moi')}}" class="btn btn-success waves-effect waves-light" style="margin-bottom:10px" > Thêm Mới <i class="fas-3x fa-plus-circle"></i></a>  
                                <table id="basic-datatable" class="table table-striped">
                                    <thead>
                                        <tr>
                                       
                                        <th>Tiêu Đề Tin Tức</th>
                                        <th>Nội Dung Giới Thiệu</th>
                                        <th>Thể Loại</th>
                                        <th>Hình Ảnh</th>
                                        <th>Cập Nhật</th>
                                        <th>Xóa</th>
                                        </tr>
                                    </thead>
                                @foreach($listNews as $DanhSach)
                                    <tbody>
                                        <tr>
                                            
                                            <th>{{$DanhSach->TIEU_DE_TIN_TUC}}</th>
                                            <th>{{$DanhSach->NOI_DUNG_GIOI_THIEU}}</th>
                                            <th>{{$DanhSach->THE_LOAI}}</th>
                                            <th>
                                                <img style="width: 220px; height: 190px;" src="../news/{{$DanhSach->TEN_HA}}" alt="IMG">
                                            </th>
                                            <th>
                                                <a href="{{ route('trang-tin-tuc.cap-nhat', ['id' => $DanhSach->id]) }}" class="btn btn-outline-success btn-rounded waves-effect waves-light">
                                                    <i class="mdi mdi-grease-pencil"></i>
                                                </a>
                                            </th>    
                                            <th>
                                                <a href="{{ route('trang-tin-tuc.xoa', ['id' => $DanhSach->id]) }}" class="btn btn-danger btn-rounded waves-effect waves-light">
                                                    <i class="fe-trash-2"></i>
                                                </a>
                                            </th>
                                        </tr>
                                       @endforeach 
                                    </tbody>
                                </table>
                                
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->
@endsection

