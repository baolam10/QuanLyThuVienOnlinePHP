<header id="topnav">

    <!-- Topbar Start -->
    <div class="navbar-custom">
        <div class="container-fluid">
            <ul class="list-unstyled topnav-menu float-right mb-0">

                <li class="dropdown notification-list">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle nav-link">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </li>

                <li class="d-none d-sm-block">
                    <form class="app-search">
                        <div class="app-search-box">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Tìm ở đây...">
                                <div class="input-group-append">
                                    <button class="btn" type="submit">
                                        <i class="fe-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </li>

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="{{ asset('assets/images/users/user-1.jpg') }}" alt="user-image" class="rounded-circle">
                        <span class="pro-user-name ml-1">
                                @if (Auth::check())
                                {{ Auth::user()->ho_ten }}
                                @endif
                                <i class="mdi mdi-chevron-down"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5 class="m-0">
                                Chào bạn! 
                            </h5>
                        </div>

                        <!-- item-->
                        <a href="#" class="dropdown-item notify-item">
                            <i class="fe-user"></i>
                            <span>Tài khoản cá nhân</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        <a href="{{ route('dang-xuat') }}" class="dropdown-item notify-item">
                            <i class="fe-log-out"></i>
                            <span> Đăng xuất</span>
                        </a>

                    </div>
                </li>

            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="#" class="logo text-center">
                    <span class="logo-lg">
                        
                        <img src="{{ asset('assets/images/logo.png') }}" alt="" height="26">
                        <!-- <span class="logo-lg-text-dark">Upvex</span> -->
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-sm-text-dark">X</span> -->
                        <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="28">
                    </span>
                </a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- end Topbar -->

    <div class="topbar-menu">
        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                        <li class="has-submenu">
                            <a href="{{ route('trang-quan-ly.danh-sach') }}">TRANG CHỦ</a>
                        </li>
                        <li class="has-submenu">
                        <a href="{{ route('trang-sach.danh-sach') }}"><i class="fas fa-address-book"></i>SÁCH</a>
                        </li>

                        <li class="has-submenu">
                            <a href="{{ route('trang-tac-gia.danh-sach') }}"><i class="fas fa-user-edit"></i>TÁC GIẢ</a>
                        </li>

                        <li class="has-submenu">
                            <a href="{{ route('trang-the-loai.danh-sach') }}"><i class="fas fa-feather-alt"></i>THỂ LOẠI</a>
                        </li>

                        <li class="has-submenu">
                            <a href="{{ route('trang-nha-xuat-ban.danh-sach') }}"><i class="fab fa-whmcs"></i>NHÀ XUẤT BẢN</a>
                        </li>
                        <li class="has-submenu">
                            <a href="{{ route('trang-doc-gia.danh-sach') }}"><i class="fas fa-user-graduate"></i>ĐỌC GIẢ</a>
                        </li>

                        <li class="has-submenu">
                            <a href="{{ route('trang-the-thu-vien.danh-sach') }}"><i class="fas fa-tags"></i>THẺ THƯ VIỆN</a>
                        </li>

                        <li class="has-submenu">
                            <a href="#">
                            <i class="la la-cube"></i> NHÂN VIÊN <div class="arrow-down"></div></a>
                            <ul class="submenu" style="padding-left: 10px;">
                                <li> <a href="{{ route('trang-tat-ca-nhan-vien.danh-sach') }}" > TẤT CẢ NHÂN VIÊN</a> </li>
                                <li> <a href="{{ route('trang-tat-ca-nhan-vien.danh-sach-nhan-vien') }}" > NHÂN VIÊN THỦ THƯ </a>  </li>
                                <li> <a href="{{ route('trang-nhan-vien-ho-tro.danh-sach') }}" > NHÂN VIÊN HỖ TRỢ </a> </li>
                            </ul>
                        </li>

                        <li class="has-submenu">
                            <a href="{{ route('trang-slides.danh-sach') }}"><i class="fas fa-tags"></i>SLIDES-SHOW</a>
                        </li>
                        <li class="has-submenu">
                            <a href="{{ route('trang-tin-tuc.danh-sach') }}"><i class="fas fa-tags"></i>TIN TỨC</a>
                        </li>
                        <li class="has-submenu">
                            <a href="#">
                            <i class="fas fa-grip-horizontal"></i> PHIẾU <div class="arrow-down"></div></a>
                            <ul class="submenu" style="padding-left: 10px;">
                                <li> <a href="{{ route('trang-phieu-muon.danh-sach') }}" > PHIẾU MƯỢN </a> </li>
                                <li> <a href="{{ route('trang-phieu-tra.danh-sach') }}" > PHIẾU TRẢ </a>  </li>
                                <li> <a href="{{ route('trang-phieu-phat.danh-sach') }}" > PHIẾU PHẠT </a> </li>
                            </ul>
                        </li>

                </ul>
                <!-- End navigation menu -->

                <div class="clearfix"></div>
            </div>
            <!-- end #navigation -->
        </div>
        <!-- end container -->
    </div>
    <!-- end navbar-custom -->
</header>