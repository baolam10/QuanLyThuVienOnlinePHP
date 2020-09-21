<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Tạo Tài Khoản</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="{{ asset('register/fonts/linearicons/style.css')}}">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{ asset('register/css/style.css')}}">
	</head>

	<body>
		
		<div class="wrapper">
			<div class="inner">
				<img src="{{ asset('register/images/image-1.png')}}" alt="" class="image-1">
				<form action="{{ route('xu-ly-tao-tai-khoan') }}" method="POST">
					@csrf
					<h3>Tài Khoản Mới</h3>
					@if($errors->any())
                                    <div class="alert alert-danger" style="text-align: center; color: red;">
                                        <strong>{{ $errors->first() }}</strong>
                                    </div>

                    @elseif(isset($msg))
                                    <div class="alert alert-success">
                                        <strong>{{ $msg }}</strong>
                                    </div>
                                    <br>
                    @endif	
					<br>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" class="form-control" id ="TEN_DOC_GIA" name="TEN_DOC_GIA" placeholder="TÊN ĐỌC GIẢ">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-phone-handset"></span>
						<input type="text" class="form-control" id="DIA_CHI" name="DIA_CHI" placeholder="ĐỊA CHỈ">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" class="form-control" id="MA_SO_THE" name="MA_SO_THE" placeholder="MÃ SỐ SINH VIÊN">
					</div>
					<div class="form-holder" style="height: 50px;" >
						<span class="lnr lnr-user"></span>
						<select id="GIOI_TINH" name="GIOI_TINH">
					    <option >Nam</option>
					    <option >Nữ</option>
					    <option >Khác</option>
					  	</select>
					</div>
					<!-- <div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" class="form-control" placeholder="HẠN SỬ DỤNG">
					</div> -->
					<div class="form-holder">
						<span class="lnr lnr-envelope" ></span>
						<input type="text" class="form-control" id="EMAIL" name="EMAIL" placeholder="EMAIL">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" class="form-control" id="MAT_KAU" name="MAT_KHAU" placeholder="MẬT KHẨU">
						
					</div>
					
					<button id="register" style="margin-bottom: -8%;  border-radius: 30px;" type="submit">
						<span style="margin-left: 10%">ĐĂNG KÝ</span>
					</button>
					<button id="register" style="height: 30px;margin-bottom: -8%; border-radius: 30px;" type="button" onclick="window.location.href='{{route('dang-nhap-nguoi-dung')}}'">
						<span style="margin-left: 25px;">ĐĂNG NHẬP</span>
					</button>
						
				

				</form>
				<img src="{{ asset('register/images/image-2.png')}}" alt="" class="image-2">
			</div>
			
		</div>
		
		<script src="{{ asset('register/js/jquery-3.3.1.min.js')}}"></script>
		<script src="{{ asset('register/js/main.js')}}"></script>

		

	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>