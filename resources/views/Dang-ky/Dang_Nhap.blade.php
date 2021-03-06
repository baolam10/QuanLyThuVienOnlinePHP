<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập trang quản lý thư viện</title>
</head>
<body>
    <!DOCTYPE html>
<html>
<head>
<title>Creative Colorlib SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="{{ asset('css/login.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body >
	<!-- main -->
	@if(Session('success'))
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
	    <script type="text/javascript">
		   
		      swal("Đăng Ký Tài Khoản Thành Công!","Chọn OK để tiếp tục!","success");
		    
	    </script>
	@endif
	<div class="main-w3layouts wrapper" >
		<h1 style="font-size: 50px; font-family: bold;">ĐĂNG NHẬP</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="{{route('xu-ly-dang-nhap-nguoi-dung')}}" method="POST">
					@csrf
					<input class="text" type="text" id="ten_dang_nhap" name="ten_dang_nhap" required="Nhập tên đăng nhập..." placeholder="Nhập mã đọc giả...">
					</br>
					</br>
					<input class="text" type="password" id="mat_khau" name="mat_khau" required="Nhập mật khẩu..." placeholder="Nhập mật khẩu...">
					</br>
					@if(count($errors)>0)
                            <div class="alert alert-danger" style="color: red">
                                    @foreach ($errors->all() as $err)
                                    {{$err}}<br>
                                    @endforeach
                            </div>
					@endif
					<input type="submit" value="ĐĂNG NHẬP">
					@if(@session('thongbao'))
							<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
					        <script type="text/javascript">
					            swal("Thông tin đăng nhập không hợp lệ!","Vui lòng kiểm tra lại!","error");
					        </script>
					@endif
				</form>
				<p>Bạn chưa có tài khoản? <a href="{{ route('tao-tai-khoan')}}"> Đăng ký ngay!</a></p>
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p>© 2020 Form Đăng Nhập | Thiết kế từ <a href="https://colorlib.com/" target="_blank">Đặng Văn Chiêu</a></p>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->

</body>
</html>
</body>
</html>