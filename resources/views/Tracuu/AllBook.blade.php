@extends('Index')
@section('main-content')
<div id="contents">
		<div class="topnav" style="background-image: url('images/headerKHTN.png')">
			<img src="images/iconKHXH.png" alt="Img" height="170" width="180" style="margin-top:5px ;">
		 </div> 
	</div>		
	<div class="content" style="margin-right: 100px;" >
		<div class="Product-Sell-bot">
			<div id="myCarousell" class="carousel slide bg-inverse w-60" data-ride="carousel">
				<div class="carousel-inner">
				@foreach($all_book as $key => $al)
					<div class="carousel-item {{$key == 0 ? 'active' : ' '}}">
					@foreach($slide_book as $al)
						<div style="float: left; width: 15%; margin-left: 4.3%; margin-top: 2%;">
						@if($al->TINH_TRANG==='Sách Mới')
							<div class="Slide_Book"><b>Mới</b><i class="fas fa-4x fa-caret-down"></i></div>
							<img style="width: 100%;" class="d-block" src="HinhAnh/{{$al->MA_HA}}" alt="First slide">
						@else	
							<img style="width: 100%;" class="d-block" src="HinhAnh/{{$al->MA_HA}}" alt="First slide">
						@endif	
						</div>
					@endforeach	
					</div>	
				@endforeach	
						<a class="carousel-control-prev" href="#myCarousell" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#myCarousell" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
				</div>
			</div>
		</div>
	</div>
	<div class="Space"></div>
	<div class="featured">
		<h2>Danh Sách {{count($tat_ca_sach)}} quyển sách trong thư viện</h2>
		<ul class="clearfix">
		@foreach($all_book as $all)
			<li>
				<div class="frame1" >
					<div class="box" onclick="window.location = '{{ route('chi-tiet-san-pham', ['x' => $all->id]) }}' ">
						<img src="HinhAnh/{{$all->MA_HA}}" alt="Img" height="130" width="197">
					</div>
				</div>
				<p style="height: 150px; overflow: hidden;"> 
					<b>{{$all->TEN_SACH}}</b>{{$all->NOI_DUNG_GIOI_THIEU}}
				</p>
				<div class="btn_chitiet">
						<a onclick="AddCart({{$all->id}})" href="javascript:" class="btn_chitietsp"><i class="fas fa-shopping-cart" style="padding-left: 2px;"></i><span ></span> </a>
						<a href="{{route('chi-tiet-san-pham',$all->id)}}" class="btn_xemchitietsp"><span >Xem Chi Tiết</span> </a>
				</div>
			</li>
		@endforeach	
		</ul>
	</div>
	<div class="button-page">
		{{$all_book->links()}}
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