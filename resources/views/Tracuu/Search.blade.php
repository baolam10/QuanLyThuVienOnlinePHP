@extends('Index')

@section('main-content')
<div id="contents">
		<div class="topnav" style="background-image: url('images/headerKHTN.png')">
			<img src="images/iconKHXH.png" alt="Img" height="170" width="180" style="margin-top:5px ;">
		 </div> 
	</div>
		
	<div class="featured">
		<h2>Tìm kiếm được {{count($listSach)}} quyển sách </h2>
		<ul class="clearfix">
		@foreach($listSach as $all)
			<li>
				<div class="frame1">
					<div class="box" onclick="window.location = '{{ route('chi-tiet-san-pham', ['x' => $all->id]) }}' ">
						<img src="HinhAnh/{{$all->MA_HA}}" alt="Img" height="130" width="197">
					</div>
				</div>
				<p style="height: 150px; overflow: hidden;">
					<b>{{$all->TEN_SACH}}</b> {{$all->NOI_DUNG_GIOI_THIEU}}
				</p>
				<div class="btn_chitiet">
						<a onclick="AddCart({{$all->id}})" href="javascript:" class="btn_chitietsp"><i class="fas fa-shopping-cart" style="padding-left: 2px;"></i><span ></span> </a>
						<a href="{{route('chi-tiet-san-pham',$all->id)}}" class="btn_xemchitietsp"><span >Xem Chi Tiết</span> </a>
				</div>
			</li>
		@endforeach	
		</ul>
	</div>
	
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