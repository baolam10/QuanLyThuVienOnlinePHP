<div id="header">
		<div class="clearfix" >
			<div class="logo" style="margin-left: -18%;" >
				<a href="{{ route('trang-chu')}}"><img src="../images/logo.png" alt="LOGO" height="62" width="320"></a>
			</div>

			<ul class="navigation" style="margin-left: 15%; margin-top:-50px;" >
				<li >
					<a href="{{ route('trang-chu')}}">TRANG CHỦ</a>
				</li>
				<li>
					<a  href="{{ route('gioi-thieu')}}" >GIỚI THIỆU</a>
				</li>
				<li>
					<a href="#">LOẠI SÁCH</a>
					<div>
						<a href="{{ route('tat-ca-sach')}}">TẤT CẢ</a>
						<a href="{{ route('sach-tham-khao')}}">SÁCH THAM KHẢO</a>
						<a href="{{ route('sach-TN-va-XH')}}">TỰ NHIÊN VÀ XÃ HỘI</a>
					</div>
				</li>
				<li>
					<a href="#">DỊCH VỤ</a>
					<div>
						<a href="{{ route('cap-the')}}">CẤP THẺ</a>
						<a href="{{ route('da-phuong-tien')}}">ĐA PHƯƠNG TIỆN</a>
						<a href="{{ route('huong-dan')}}">HƯỚNG DẪN</a>
					</div>
				</li>
				<li class="new">
					<a href="{{ route('tin-tuc')}}">TIN TỨC</a>
				</li>
				
				<li>
					<a href="{{ route('doc-gia-lien-he')}}">LIÊN HỆ</a>
				</li>
				<li>
					<a href="{{route('xem-chi-tiet-phieu-muon')}}"><i class="fas fa-cart-arrow-down"></i>
					</a>
					<div class="cart">
						@if(Session::has('cart') != null)
						<div class="shop">
					    	<ul class="shopping-cart-items">
					      @foreach(Session::get('cart')->sanpham as $item)
					    	<div class="pro">
					        <i class="fas fa-times" data-id="{{$item['ttsanpham']->id}}"></i>
							      <li class="clearfix">
							        <img src="../HinhAnh/{{$item['ttsanpham']->MA_HA}}" alt="item1" />
							          <div class="item-show">
							            <span class="item-name">Tên Sách: {{$item['ttsanpham']->TEN_SACH}}</span>
							            <span class="item-quantity">Số Lượng: {{$item['quanty']}}</span>
							           </div>
							      </li>
					    	</div>
					      @endforeach
					    </ul>
					    <h4 class="item-total">Tổng Số Lượng: {{Session::get('cart')->TongSL}}</h4>
					    <button class="btn_submit" onclick="window.location.href='{{route('xem-chi-tiet-phieu-muon')}}'" >Xem Chi Tiết</button>
					    </div>
					    @elseif(Session::has('cart') == null)
					    <div class="shop">
					        <ul class="shopping-cart-items">
					          <li class="clearfix">
					            <img src="../HinhAnh/icon_shop.jpg" style="width: 120px; border-radius: 50%; margin-left: 100px; margin-top: 15px;" alt="item1" />
					          </li>
					        </ul>
					        <h6>Chưa Có Sản Phẩm</h6>
					    <div>
						@endif
					</div>
				</li>
				
				<li>
					@if(Auth::guard('customer')->check())
						@foreach($Account as $acc)
						<a href="{{ route('Xem-tai-khoan',$acc->id)}}">
						<div style="width: 50px; display: inline;"> 
							<img src="../HinhAnh\icon_user.jpg" alt="IMG" style="height: 35px; width: 35px; ">
							<h5 style="color: red; margin-left: 50px; margin-top: -22px;">{{Auth::guard('customer')->user()->TEN_DOC_GIA}}</h5>
						</div>
							<div style="margin-left: -50px; width: 150px;">
								<div style="display: inline-block; margin-top: -20px;">
									<img src="../HinhAnh\icon_lich_su.jpg" alt="IMG" style="height: 50px; width: 50px; border-radius: 50%; ">
									<a href="{{ route('xem-lich-su-muon-tra',$acc->MA_SO_THE)}}" style="margin-top: -30px;margin-bottom: 20px; margin-left: 60px;" >LỊCH SỬ MƯỢN SÁCH</a>
								</div>
								<a  href="{{ route('dang-xuat-nguoi-dung')}}" >ĐĂNG XUẤT</a>
							</div>
						</a>
						@endforeach
						
					@else
					<a href="#"><i class="fas fa-users-cog"></i>
						<div style="margin-left: -40px;">
						<a href="{{ route('dang-nhap-nguoi-dung')}}" style="margin-top: -20px;">ĐĂNG NHẬP</a>
						<a href="{{ route('tao-tai-khoan')}}">ĐĂNG KÝ</a>
						</div>
					</a>
					@endif
				</li>

				<li style="margin-left: 60%;">
				
					<form id="form-filter" class="form-inline" method="GET" action="{{route('search')}}">
						<div class="list-movie-filter-item">
							<input style="width: 220px; height: 35px; float-left" class="form-control" type="text" value="" name="Nhan_de" placeholder="Nhập tên sách cần tìm.."></input>
							<button type="submit" style=" width: 35px; height: 35px; margin-top: -30px; text-align: center;" id="btn-movie-filter" class="btn btn-red btn-filter-movie"><i class="fas fa-search"></i></button>
						</div>
				
					</form>
				
				</li>
			</ul>

			
		</div>
</div>