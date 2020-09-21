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
        swal("Thêm Nhà Xuất Bản Thành Công!","Chọn OK để tiếp tục!","success");
    </script>
@endif
@if (session('flash_message_update'))
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
    <script type="text/javascript">
        swal("Cập Nhật Nhà Xuất Bản Thành Công!","Chọn OK để tiếp tục!","success");
    </script>
@endif
@if (session('flash_message_deleted'))
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
    <script type="text/javascript">
        swal("Xóa Nhà Xuất Bản Thành Công!","Chọn OK để tiếp tục!","success");
    </script>
@endif
@if (session('flash_message_restore'))
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
    <script type="text/javascript">
        swal("Phục Hồi Nhà Xuất Bản Thành Công!","Chọn OK để tiếp tục!","success");
    </script>
@endif
@if (session('flash_message_deleted_at'))
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
    <script type="text/javascript">
        swal("Xin lỗi không thể xóa nhà xuất bản này. Vì sản phẩm nhà xuất bản này hiện đang được sử dụng","Chọn OK để tiếp tục!","error");
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
                            {{-- <h4 class="page-title">DANH SÁCH NHÀ XUẤT BẢN</h4> --}}
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
                                <a href="{{route('trang-nha-xuat-ban.danh-sach-restore')}}" class="btn btn-danger waves-effect waves-light" style="margin-bottom:10px" >Khôi Phục <i class="fas fa-recycle"></i></a> 
                                <a href="{{ route('trang-nha-xuat-ban.them-moi')}}" class="btn btn-success waves-effect waves-light" style="margin-bottom:10px" > Thêm Mới <i class="fas fa-plus-circle"></i></a>
                                <table id="basic-datatable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên NXB</th>
                                            <th>Địa Chỉ</th>
                                            <th>Email</th>
                                            <th>Cập nhật</th>
                                            <th>Xóa</th>
                                            </tr>
                                    </thead>                    
                                    <tbody>
                                        @foreach($listNhaXuatBan as $DANHSACH)
                                        <tr>
                                            <th>{{$DANHSACH->MA_NXB}}</th>
                                            <th>{{$DANHSACH->TEN_NXB}}</th>
                                            <th>{{$DANHSACH->DIA_CHI}}</th>
                                            <th>{{$DANHSACH->EMAIL}}</th>
                                            <th>
                                                <a href="{{ route('trang-nha-xuat-ban.cap-nhat', ['id' => $DANHSACH->id]) }}" class="btn btn-outline-success btn-rounded waves-effect waves-light">
                                                    <i class="mdi mdi-grease-pencil"></i>
                                                </a>
                                                </th>
                                                <th>
                                                <a href="{{ route('trang-nha-xuat-ban.xoa', ['id' => $DANHSACH->id]) }}" class="btn btn-danger btn-rounded waves-effect waves-light">
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

