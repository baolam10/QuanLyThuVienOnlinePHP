@extends('Index')

@section('main-content')
<div id="contents">
		<div class="topnav" style="background-image: url('images/headerKHTN.png')">
			<img src="images/iconKHXH.png" alt="Img" height="170" width="180" style="margin-top:5px ;">
		 </div> 
	</div>
	
	@if( count($tat_ca_sachXH) == 0 || count($tat_ca_sachTN) == 0)
	<div class="featured" >
		<h2 style="text-align: center;">Xin Lỗi Đọc Giả</h2>
		<h2 style="text-align: center;"> Hiện Tại Thư Viện Chưa Cập Nhật Sách </h2>
		<img src="HinhAnh\icon_sach_null.jpg" alt="null" style="margin-left: 43%; border-radius: 65%;">
	</div>
	@else
	<!-- <div class="Space"></div> -->
		
		<div class="featured">
			
			<h2>Sách chuyên nghành Khoa Học Tự Nhiên</h2>
			<a href="{{route('sach-khoa-hoc-tu-nhien')}}"><p style="font-size: 22px;">Xem tất cả <i class="fas fa-caret-right"></i></p></a>
			<ul class="clearfix">
				@foreach($tat_ca_sachTN as $ls) 
				<li>
					<div class="frame1">
						<div class="box" onclick="window.location = '{{ route('chi-tiet-san-pham', ['x' => $ls->id]) }}' ">
							<div class="news"><b>Mới</b><i class="fas fa-4x fa-caret-down"></i></div>
							<img src="HinhAnh/{{$ls->MA_HA}}" alt="Img" height="130" width="197">
						</div>
					</div>
					<p style="height: 150px; overflow: hidden;">
						<b>{{$ls->TEN_SACH}}</b> Cuốn “Đọc sách cộng hưởng” đưa ra phương pháp đọc nhanh bằng cách nghiền ngẫm thật kỹ một số trang tùy chọn.
					</p>
					<div class="btn_chitiet">
						<a onclick="AddCart({{$ls->id}})" href="javascript:	" class="btn_chitietsp"><i class="fas fa-shopping-cart" style="padding-left: 2px;"></i><span ></span> </a>
						<a href="{{route('chi-tiet-san-pham',$ls->id)}}" class="btn_xemchitietsp"><span >Xem Chi Tiết</span> </a>
					</div>
					<!-- <a href="" class="more">Xem Chi Tiết </a>
					</div> -->
				</li>
				@endforeach
			</ul>
		</div>
		
		<div class="featured">
			<h2>sách chuyên nghành Khoa Học Xã Hội</h2>
			<a href = "{{route('sach-khoa-hoc-xa-hoi')}}" ><p style="font-size: 22px;">Xem tất cả <i class="fas fa-caret-right"></i></p></a>
			<ul class="clearfix">
			@foreach($tat_ca_sachXH as $book)
				<li>
					<div class="frame1">
						<div class="box">
							<div class="news"><b>HOT</b><i class="fas fa-4x fa-caret-down"></i></div>
							<img src="HinhAnh/{{$book->MA_HA}}" alt="Img" height="130" width="197">
						</div>
					</div>
					<p style="height: 150px; overflow: hidden;">
						<b>{{$book->TEN_SACH}}</b> Cuốn “Đọc sách cộng hưởng” đưa ra phương pháp đọc nhanh bằng cách nghiền ngẫm thật kỹ một số trang tùy chọn.
					</p>
					<div class="btn_chitiet">
						<a onclick="AddCart({{$book->id}})" href="javascript:" class="btn_chitietsp"><i class="fas fa-shopping-cart" style="padding-left: 2px;"></i><span ></span> </a>
						<a href="{{route('chi-tiet-san-pham',$book->id)}}" class="btn_xemchitietsp"><span >Xem Chi Tiết</span> </a>
					</div>
				</li>
			@endforeach	
			</ul>
		</div>
		
	@endif
@endsection

@section('css')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css') }}">
@endsection

@section('js')
	<script src="{{asset('jquery/jquery.min.js') }}"></script>
	<script src="{{asset('jquery/popper.min.js') }}"></script>
	<script src="{{asset('js/bootstrap.min.js') }}"></script>
@endsection