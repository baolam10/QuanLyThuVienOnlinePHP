@extends('Index')
@section('main-content')
<div id="contents">
	<div class="highlight">
		<div class="clearfix">
			<div class="chitiet">
				<h2>{{$list->TEN_SACH}}</h2>
				<p>
					{{$list->NOI_DUNG_GIOI_THIEU}}
				</p>
				@foreach($tac_gia as $tg)
				<span>{{$tg->TEN_TAC_GIA}}</span>
				@endforeach
				<br>
				<br>
				<br>
				<a onclick="AddCart({{$list->id}})" href="javascript:"  class="btn_shop" id="btn_shop"><i class="fas fa-shopping-cart"></i><span style="padding-left: 10px;" >Thêm Vào Giỏ Hàng</span> </a>
			<a href="{{route('trang-chu')}}" class="btn_pay"></i><span style="padding-left: 10px;" >Trở Về Trang Chủ</span> </a>
			</div>
			<br>
			<img src="../HinhAnh/{{$list->MA_HA}}" alt="Img" height="330" width="297">
		</div>
		<br>
		<div class="motachitiet">
			<h2>Mô Tả Chi Tiết</h2>
			<p>
					{{$list->NOI_DUNG_CHINH}}
			</p>
		</div>
	</div>
	<div class="featured">
		<h2>Những quyển sách tương tự</h2>
		<a href = "{{route('tat-ca-sach')}}" ><p>Xem tất cả <i class="fas fa-caret-right"></i></p></a>
			<ul class="clearfix">
				@foreach($sp_tuongtu as $ls) 
				<li>
					<div class="frame1">
						<div class="box">
							<div class="news"><b>Mới</b><i class="fas fa-4x fa-caret-down"></i></div>
							<img src="../HinhAnh/{{$ls->MA_HA}}" alt="Img" height="130" width="197">
						</div>
					</div>
					<p style="height: 150px; overflow: hidden;">
						<b>{{$ls->TEN_SACH}}</b> Cuốn “Đọc sách cộng hưởng” đưa ra phương pháp đọc nhanh bằng cách nghiền ngẫm thật kỹ một số trang tùy chọn.
					</p>
					<div class="btn_chitiet">
						<a onclick="AddCart({{$ls->id}})" href="javascript:	" class="btn_chitietsp"><i class="fas fa-shopping-cart" style="padding-left: 2px;"></i><span ></span> </a>
						<a href="{{ route('chi-tiet-san-pham', ['x' => $ls->id]) }}" class="btn_xemchitietsp"><span >Xem Chi Tiết</span> </a>
					</div>
				</li>
				@endforeach
			</ul>
	</div>	
</div>
@endsection
