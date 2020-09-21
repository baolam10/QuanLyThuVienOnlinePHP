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
@if (session('flash_message_insert'))
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
        swal("Thêm Phiếu Trả Thành Công!","Chọn OK để tiếp tục!","success");
    </script>
@endif
@if (session('flash_message_deleted'))
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
        swal("Xóa Phiếu Trả Thành Công!","Chọn OK để tiếp tục!","success");
    </script>
@endif
|<!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Danh Sách</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Bảng</a></li>
                                    <li class="breadcrumb-item active">Dữ liệu</li>
                                </ol>
                            </div>
                            {{-- <h4 class="page-title">DANH SÁCH PHIẾU MƯỢN</h4> --}}
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                {{-- <h4 class="header-title">Thống kê</h4>
                                <p class="text-muted font-13 mb-4">
                                    Thông tin và số liệu về tổng số sách trong thư viện
                                    <code>$().Bảng SÁCH();</code>.
                                </p> --}}
                                <div style="display: inline-block;">
                                    <form method="GET" action="{{route('trang-phieu-tra.them-moi')}}">
                                        <input type="text" name="MA_PHIEU_MUON" class="form-control" placeholder="Vui lòng nhập mã Phiếu Mượn">
                                        <br>
                                        <button type="submit" id="add" class="btn btn-success waves-effect waves-light" style="margin-bottom:10px; margin-top: -80px; margin-left: 250px;"> Thêm Mới <i class="fas fa-plus-circle"></i></button> 
                                    </form> 
                                </div>
                                <table id="basic-datatable" class="table table-striped">
                                    <thead>
                                        <tr>
                                        <th>STT</th>
                                        <th>Mã Phiếu Trả</th>
                                        <th>Mã Phiếu Mượn</th>
                                        <th>Ngày Trả</th>  
                                        <th style="text-align: center;">Mã Nhân Viên</th> 
                                       
                                        <th>Xóa</th>
                                        </tr>
                                    </thead>                
                                    <tbody>
                                        @foreach($listPhieuTra as $DANHSACH)
                                        <tr>
                                            <th>{{$DANHSACH->id}}</th>
                                            <th>{{$DANHSACH->MA_PHIEU_TRA}}</th>
                                            <th>{{$DANHSACH->MA_PHIEU_MUON}}</th>
                                            <th>{{$DANHSACH->NGAY_TRA}}</th>
                                            <th style="text-align: center;">{{$DANHSACH->MA_NHAN_VIEN}}</th>
                                            
                                            <th>
                                                <a href="{{ route('trang-phieu-tra.xoa', ['id' => $DANHSACH->id]) }}" class="btn btn-danger btn-rounded waves-effect waves-light">
                                                    <i class="mdi mdi-delete"></i>
                                                </a>
                                                </th>
                                            </th>
                                        </tr>
                                        @endforeach 
                                    </tbody>
                                </table>
                                {{-- {!! $listSach->links() !!} --}}
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->
@endsection

