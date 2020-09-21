<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Trang quản lý thư viện trực tuyến</title>
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/sildeshow.css') }}" type="text/css" /> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	@yield('css')
</head>
<body>
	@include('partials.navigation')

	<!-- @yield('header-content') -->

	@yield('main-content')
	@include('partials.right-bar')
	<script src="{{ asset('js/slide.js') }}" ></script>
	
	<!-- JavaScript -->
	<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

	<!-- CSS -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
	<!-- Default theme -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
	<!-- Semantic UI theme -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
	<!-- Bootstrap theme -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript">
		function AddCart(id) {
			$.ajax({
				url: 'them-san-pham/'+id,
				type: 'GET',
			}).done(function(response) {
				$(".navigation li .cart .shop").empty();
				$(".navigation li .cart .shop").html(response);
				console.log(response);
				alertify.success('Thêm Sách Thành Công');

			});
		}
		$(".navigation li .cart .shop").on("click",".shopping-cart-items .pro i", function(){
			console.log($(this).data("id"));	
			$.ajax({
				url: 'xoa-san-pham/'+$(this).data("id"),
				type: 'GET',
			}).done(function(response) {
				$(".navigation li .cart .shop").empty();
				$(".navigation li .cart .shop").html(response);
				console.log(response);
				alertify.success('Xóa Sách Thành Công');
			});
		});

	</script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<script src="https://unpkg.com/sweetalert@2.1.2/dist/sweetalert.min.js"></script>
	
	<!--Zalo Chat -->
	<div class="zalo-chat-widget" data-oaid="1558126983899774468" data-welcome-message="Chào bạn! Rất vui khi được hỗ trợ bạn! " data-autopopup="0" data-width="350" data-height="420"></div>

	<script src="https://sp.zalo.me/plugins/sdk.js"></script>

	@yield('js')
</body>
</html>