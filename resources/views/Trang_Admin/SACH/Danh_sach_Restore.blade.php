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
                            {{-- <h4 class="page-title">Số liệu sách</h4> --}}
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
                                <a href="{{route('trang-sach.danh-sach')}}" class="btn btn-success waves-effect waves-light" style="margin-bottom:10px" > Trang Chủ <i class="fas fa-list-ul"></i></a>
                                <table id="basic-datatable" class="table table-striped">
                                    <thead>
                                        <tr>
                                        <th>STT</th>
                                        <th>Mã sách</th>
                                        <th>Tên sách</th>
                                        <th>Tên tác giả</th>
                                        <th>Tên thể loại</th>
                                        <th>Tên Mã NXB</th>   
                                        <th>Năm xuất bản</th>
                                        <th>Số lượng</th>
                                        <th>Khôi Phục</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(isset($listSach))
                                        @foreach($listSach as $DanhSach)
                                        <tr>
                                            <th>{{$DanhSach->id}}</th>
                                            <th>{{$DanhSach->MA_SACH}}</th>
                                            <th>{{$DanhSach->TEN_SACH}}</th>
                                            <th>{{$DanhSach->tacGia->TEN_TAC_GIA}}</th>
                                            <th>{{$DanhSach->theLoai->TEN_THE_LOAI}}</th>
                                            <th>{{$DanhSach->nhaXuatBan->TEN_NXB}}</th>
                                            <th>{{$DanhSach->NAM_XUAT_BAN}}</th>
                                            <th>{{$DanhSach->SO_LUONG}}</th>
                                            <th>
                                                <a href="{{ route('trang-sach.khoi-phuc', ['id' => $DanhSach->id]) }}" class="btn btn-outline-success btn-rounded waves-effect waves-light">
                                                    <i class="fas fa-trash-restore-alt"></i>
                                                </a> 
                                            </th>
                                        </tr>
                                        @endforeach 
                                        @endif
                                    </tbody>
                                  
                                </table>
                                {{-- {!! $listSach->links() !!} --}}
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->
@endsection

