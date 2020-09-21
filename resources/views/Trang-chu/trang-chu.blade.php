@extends('Index')
@section('main-content')
@if(Session::has('success_acc'))
    	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
	    <script type="text/javascript">
		    swal("Đăng Nhập Tài Khoản Thành Công!","Chào Mừng Bạn Đến Với Chúng Tôi!","success");
	    </script>
@endif
@if(Session::has('success'))
		<h5 class="alert alert-success">{{Session('success')}} "<b> {{Session('name')}} </b>"</h5>
    	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	    <script type="text/javascript">
		    swal("Xác Nhận Phiếu Mượn Thành Công!","Chọn OK để tiếp tục!","success");
	    </script>
@endif
<div id="contents">
	
		<div class="slideshow-container">
			@foreach($slides as $key => $sl)
			@if($key == 1)
			<div class="mySlides fade" id="slideblock">
			  <img src="images/{{$sl->TEN_HA}}" alt="Img" style="height:350px; width: 550px" style="text-align: center">
			  <div class="text"><h2>{{$sl->NOI_DUNG_GIOI_THIEU}}</h2></div>
			</div>
			@else 
			<div class="mySlides fade">
				<img src="images/{{$sl->TEN_HA}}" alt="Img" style="height:350px; width: 550px" style="text-align: center">
				<div class="text"><h2>{{$sl->NOI_DUNG_GIOI_THIEU}}</h2></div>
			  </div>
			@endif
			@endforeach	
		</div>
		<div style="text-align:center">
			@foreach($slides as $key => $sl)
			<span class="dot" onclick="currentSlide($key)"></span> 
			@endforeach
		</div>
		<div class="highlight">
			<div class="clearfix">
				<div class="testimonial">
					<h2>Trích dẫn</h2>
					<p>
						&ldquo;Một cuốn sách thực sự hay nên đọc trong tuổi trẻ, rồi đọc lại khi đã trưởng thành, và một nửa lúc tuổi già, giống như một tòa nhà đẹp nên được chiêm ngưỡng trong ánh bình minh, nắng trưa và ánh trăng.&rdquo;
					</p>
					<span>-Robertson Davies-</span>
				</div>
				<h1>Người thành công luôn có thói quen đọc sách, bạn có biết vì sao không?</h1>
				<p>
					Sách chính là tinh hoa của nhân loại, chứa đựng một kho tàng kiến thức khổng lồ mà bất cứ ai cũng muốn chinh phục. Mỗi một cuốn sách hay là một chiếc chìa khóa đưa chúng ta đến thành công và thậm chí có thể thay đổi cả cuộc đời một con người.
				</p>
			</div>
		</div>
		@if(count($listSach) != 0)
		<div class="featured">
			<h2>Những quyển sách mới cập nhật</h2>
			<a href = "{{route('tat-ca-sach')}}" ><p style="font-size: 22px; margin-right: 15%;">Xem tất cả <i class="fas fa-caret-right"></i></p></a>
			<ul class="clearfix">
				@foreach($listSach as $ls) 
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
						<a href="{{ route('chi-tiet-san-pham', ['x' => $ls->id]) }}" class="btn_xemchitietsp"><span >Xem Chi Tiết</span> </a>
					</div>
					<!-- <a href="" class="more">Xem Chi Tiết </a>
					</div> -->
				</li>
				@endforeach
			</ul>
		</div>
		@endif
		@if(count($list) != 0))
		<div class="featured">
			<h2>Những quyển sách nổi bật</h2>
		<a href = "{{route('tat-ca-sach')}}" ><p style="font-size: 22px; margin-right: 15%;">Xem tất cả <i class="fas fa-caret-right"></i></p></a>
			<ul class="clearfix">
			@foreach($list as $book)
				<li>
					<div class="frame1">
						<div class="box" onclick="window.location = '{{ route('chi-tiet-san-pham', ['x' => $book->id]) }}' ">
							<div class="news"><b>HOT</b><i class="fas fa-4x fa-caret-down"></i></div>
							<img src="HinhAnh/{{$book->MA_HA}}" alt="Img" height="130" width="197">
						</div>
					</div>
					<p style="height: 150px; overflow: hidden;">
						<b>{{$book->TEN_SACH}}</b> 
						{{$book->NOI_DUNG_GIOI_THIEU}}
					</p>
					
					<div class="btn_chitiet">
						<a pointer-events: none; onclick="AddCart({{$book->id}})" href="javascript:" class="btn_chitietsp"><i class="fas fa-shopping-cart" style="padding-left: 2px;"></i><span ></span></a>
						<a href="{{ route('chi-tiet-san-pham', ['x' => $book->id]) }}" class="btn_xemchitietsp"><span >Xem Chi Tiết</span> </a>
					</div>
				</li>
			@endforeach	
			   
			</ul>
		</div>
		@endif
</div>
@endsection
