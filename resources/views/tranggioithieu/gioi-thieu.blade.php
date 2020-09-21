@extends('Index')
@section('main-content')
<div id="contents">
		<div id="adbox">
			<div class="clearfix">
				<img src="images/book.jpg" alt="Img" height="382" width="594">
				<div class="detail">
					<h1>Cuộc đời không giống như một quyển sách, đọc phần đầu là đoán được phần cuối. Cuộc đời bí ẩn và thú vị hơn nhiều</h1>
				</div>
			</div>
		</div>
		@if(count($list) != 0))
		<div class="featured">
			<h2>Những quyển sách đặc biệt(Special Book)</h2>
			<!-- <a href = "#" ><p>Xem tất cả <i class="fas fa-caret-right"></i></p></a> -->
			<ul class="clearfix">
			@foreach($list as $book)
				<li>
					<div class="frame1">
						<div class="box" onclick="window.location = '{{ route('chi-tiet-san-pham', ['x' => $book->id]) }}' ">
								<div class="news"><i class="fas fa-4x fa-caret-down"></i>
								<img src="../HinhAnh/special_book.jpg" style="border-radius: 50%; height: 80px; width: 80px; margin-top: -90px; margin-left: -20px;">
							</div>
							<img src="HinhAnh/{{$book->MA_HA}}" alt="Img" height="130" width="197">
						</div>
					</div>
					<p style="height: 145px; overflow: hidden; overflow: hidden;">
						<b>{{$book->TEN_SACH}}</b>{{$book->NOI_DUNG_GIOI_THIEU}}
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
	</div>
@endsection