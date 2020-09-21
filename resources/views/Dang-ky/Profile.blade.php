<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Thông Tin Tài Khoản</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	
	
	<!-- Font -->
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CAllura" rel="stylesheet">
	
	<!-- Stylesheets -->
	
	<link href="{{ asset('Profile_User/common-css/bootstrap.css')}}" rel="stylesheet">
	
	<link href="{{ asset('Profile_User/common-css/ionicons.css')}}" rel="stylesheet">
	
	<link href="{{ asset('Profile_User/common-css/fluidbox.min.css')}}" rel="stylesheet">
	
	<link href="{{ asset('Profile_User/01-cv-portfolio/css/styles.css')}}" rel="stylesheet">
	
	<link href="{{ asset('Profile_User/01-cv-portfolio/css/responsive.css')}}" rel="stylesheet">
	
</head>
@extends('Index')
@section('main-content')
<body>
	@foreach($Account as $acc)
	<section class="intro-section">
		<!-- <div class="button">
			<button type="button" onclick="window.location.href='{{route('trang-chu')}}'" class="home">Trang Chủ</button>
			<button type="button" onclick="window.location.href='{{route('dang-xuat-nguoi-dung')}}'" class="home">Đăng Xuất</button>
		</div> -->
		<div class="container">
			<div class="row">
				<div class="col-md-1 col-lg-2"></div>
				<div class="col-md-10 col-lg-8">
					<div class="intro">
						<div class="profile-img"><img src="{{asset('../HinhAnh\icon_user.jpg')}}" alt=""></div>
						<h2><b>{{$acc->TEN_DOC_GIA}}</b></h2>
						<h4 class="font-yellow">MSSV: {{$acc->MA_SO_THE}}</h4>
						<ul class="information margin-tb-30">
							<li><b>ĐỊA CHỈ : </b>{{$acc->DIA_CHI}}</li>
							<li><b>EMAIL : </b>{{$acc->EMAIL}}</li>
							<li><b>GIỚI TÍNH : </b>{{$acc->GIOI_TINH}}</li>
						</ul>
						<ul class="social-icons">
							<li><a href="#"><i class="ion-social-pinterest"></i></a></li>
							<li><a href="#"><i class="ion-social-linkedin"></i></a></li>
							<li><a href="#"><i class="ion-social-instagram"></i></a></li>
							<li><a href="#"><i class="ion-social-facebook"></i></a></li>
							<li><a href="#"><i class="ion-social-twitter"></i></a></li>
						</ul>
						<!-- <button type="button" class="update" onclick="window.location.href='{{route('cap-nhat-thong-tin-nguoi-dung')}}'">Cập Nhật Thông Tin</button> -->
					</div><!-- intro -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- intro-section -->
	@endforeach
	
	<!-- SCIPTS -->
	
	<script src="{{ asset('Profile_User/common-js/jquery-3.2.1.min.js')}}"></script>
	
	<script src="{{ asset('Profile_User/common-js/tether.min.js')}}"></script>
	
	<script src="{{ asset('Profile_User/common-js/bootstrap.js')}}"></script>
	
	<script src="{{ asset('Profile_User/common-js/isotope.pkgd.min.js')}}"></script>
	
	<script src="{{ asset('Profile_User/common-js/jquery.waypoints.min.js')}}"></script>
	
	<script src="{{ asset('Profile_User/common-js/progressbar.min.js')}}"></script>
	
	<script src="{{ asset('Profile_User/common-js/jquery.fluidbox.min.js')}}"></script>
	
	<script src="{{ asset('Profile_User/common-js/scripts.js')}}"></script>
	
</body>
@endsection
</html>