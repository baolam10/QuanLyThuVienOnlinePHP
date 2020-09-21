@extends('Admin')
@section('css')
<!-- third party css -->
<link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('js')
<!-- Third Party js-->
<script src="{{ asset('assets/libs/jquery-knob/jquery.knob.min.js') }}"></script>
<script src="{{ asset('assets/libs/peity/jquery.peity.min.js') }}"></script>
<script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
        <!-- third party js ends -->
<!-- Dashboard init -->
<script src="{{ asset('assets/js/pages/dashboard-2.init.js') }}"></script>
@endsection


@section('Trang_Admin.main-admin-content')
@if (session('success_acc'))
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
    swal("Đăng nhập thành công!","Chọn OK để tiếp tục!","success");
</script>
@endif
  <!-- start page title -->
                <div style="margin-top:20px; height:50px; background-color:#f5f6f8"></div>
                <!-- end page title --> 
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card-box" style="background-color:PapayaWhip;">
                            <h4 class="header-title mt-0 mb-2">SỐ LƯỢNG SÁCH</h4>

                            <div class="mt-1">
                                <div class="float-left" dir="ltr">
                                <img src="{{ asset('./images/sach.png') }}" alt="Img" height="60" width="80">
                                </div>
                                <div class="text-right">
                                    <h2 class="mt-3 pt-1 mb-1">{{DB::table('SACH')->count()}} </h2>
                                    <p class="text-muted mb-0">Đã thêm vào</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <div class="card-box" style="background-color:LightSteelBlue;">
                            <h4 class="header-title mt-0 mb-3">SỐ LƯỢNG TÁC GIẢ</h4>

                            <div class="mt-1">
                                <div class="float-left" dir="ltr">
                                <img src="{{ asset('./images/tac_gia.png') }}" alt="Img" height="60" width="80">
                                </div>
                                <div class="text-right">
                                    <h2 class="mt-3 pt-1 mb-1">{{DB::table('TAC_GIA')->count()}} </h2>
                                    <p class="text-muted mb-0">Đã thêm vào</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <div class="card-box" style="background-color:#FFCCFF;">
                            <h4 class="header-title mt-0 mb-3">SỐ LƯỢNG THỂ LOẠI</h4>

                            <div class="mt-1">
                                <div class="float-left" dir="ltr">
                                <img src="{{ asset('./images/van.png') }}" alt="Img" height="60" width="80">
                                </div>
                                <div class="text-right">
                                    <h2 class="mt-3 pt-1 mb-1">{{DB::table('THE_LOAI')->count()}} </h2>
                                    <p class="text-muted mb-0">Đã thêm vào</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <div class="card-box" style="background-color:#FFFFCC;">
                            <h4 class="header-title mt-0 mb-3">SỐ LƯỢNG NHÀ XUẤT BẢN</h4>

                            <div class="mt-1">
                                <div class="float-left" dir="ltr">
                                <img src="{{ asset('./images/giao_duc.png') }}" alt="Img" height="60" width="80">
                                </div>
                                <div class="text-right">
                                    <h2 class="mt-3 pt-1 mb-1">{{DB::table('NHA_XUAT_BAN')->count()}}  </h2>
                                    <p class="text-muted mb-0">Đã thêm vào</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div><!-- end col -->

                </div>

                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card-box" style="background-color:#FFFFCC;">
                            <h4 class="header-title mt-0 mb-2">SỐ LƯỢNG ĐỌC GIẢ</h4>

                            <div class="mt-1">
                                <div class="float-left" dir="ltr">
                                <img src="{{ asset('./images/doc_gia.png') }}" alt="Img" height="60" width="80">
                                </div>
                                <div class="text-right">
                                    <h2 class="mt-3 pt-1 mb-1">{{DB::table('DOC_GIA')->count()}}</h2>
                                    <p class="text-muted mb-0">Đã thêm vào</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <div class="card-box" style="background-color:#FFCCFF;">
                            <h4 class="header-title mt-0 mb-3">SỐ LƯỢNG THẺ THƯ VIỆN</h4>

                            <div class="mt-1">
                                <div class="float-left" dir="ltr">
                                <img src="{{ asset('./images/the_thu_vien.png') }}" alt="Img" height="60" width="80">
                                </div>
                                <div class="text-right">
                                    <h2 class="mt-3 pt-1 mb-1">{{DB::table('THE_THU_VIEN')->count()}} </h2>
                                    <p class="text-muted mb-0">Đã thêm vào</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <div class="card-box" style="background-color:LightSteelBlue;">
                            <h4 class="header-title mt-0 mb-3">SỐ LƯỢNG NHÂN VIÊN HỖ TRỢ</h4>

                            <div class="mt-1">
                                <div class="float-left" dir="ltr">
                                <img src="{{ asset('./images/NVTV.png') }}" alt="Img" height="60" width="80">
                                </div>
                                <div class="text-right">
                                    <h2 class="mt-3 pt-1 mb-1">{{DB::table('NHAN_VIEN')->count()}}</h2>
                                    <p class="text-muted mb-0">Đã thêm vào</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <div class="card-box" style="background-color:PapayaWhip;">
                            <h4 class="header-title mt-0 mb-3">SỐ LƯỢNG PHIẾU MƯỢN</h4>

                            <div class="mt-1">
                                <div class="float-left" dir="ltr">
                                <img src="{{ asset('./images/phieu_muon.png') }}" alt="Img" height="60" width="80">
                                </div>
                                <div class="text-right">
                                    <h2 class="mt-3 pt-1 mb-1">{{DB::table('PHIEU_MUON')->count()}}</h2>
                                    <p class="text-muted mb-0">Đã thêm vào</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div><!-- end col -->

                </div>

                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card-box" style="background-color:PapayaWhip;">
                            <h4 class="header-title mt-0 mb-2">SỐ LƯỢNG PHIẾU TRẢ</h4>

                            <div class="mt-1">
                                <div class="float-left" dir="ltr">
                                <img src="{{ asset('./images/phieu_tra.png') }}" alt="Img" height="60" width="80">
                                </div>
                                <div class="text-right">
                                    <h2 class="mt-3 pt-1 mb-1">{{DB::table('PHIEU_TRA')->count()}}</h2>
                                    <p class="text-muted mb-0">Đã thêm vào</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <div class="card-box" style="background-color:LightSteelBlue;">
                            <h4 class="header-title mt-0 mb-3">SỐ LƯỢNG PHIẾU PHẠT</h4>

                            <div class="mt-1">
                                <div class="float-left" dir="ltr">
                                    <img src="{{ asset('./images/phatthuvien.jpg') }}" alt="Img" height="60" width="80">
                                </div>
                                <div class="text-right">
                                    <h2 class="mt-3 pt-1 mb-1">{{DB::table('PHIEU_PHAT')->count()}}</h2>
                                    <p class="text-muted mb-0">Đã thêm vào</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div><!-- end col -->

                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card-box">
                            <div class="dropdown float-right">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-horizontal"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Download</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Upload</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                </div>
                            </div>
                           

                        </div> <!-- end card-box-->
                    </div> <!-- end col-->

                </div>
                <!-- end row -->
 


@endsection

