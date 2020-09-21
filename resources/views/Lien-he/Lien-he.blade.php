@extends('Index')

@section('main-content')

<div id="contents">
		<div class="clearfix">
			<div class="sidebar">
				<div>
					<h3>THÔNG TIN LIÊN HỆ</h3>
					<ul class="contact">
						<li>
							<p>
								<span class="home"></span> <em>Manes Winchester<br> Family Law Firm</em> 65 Huỳnh Thúc Kháng, P.Bến Nghé, Q,1, TP.HCM
							</p>
						</li>
						<li>
							<p class="phone">
								Phone: 0338150131
							</p>
						</li>
						<li>
							<p class="fax">
								Fax: 0586432903
							</p>
						</li>
						<li >
							<p class="mail">
								Email: hethongthuvienonline2020@gmail.com
							</p>
						</li>
					</ul>
				</div>
				<div>
					<h3 >THÔNG TIN VỊ TRÍ</h3>
					<ul class="contact">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.51384936318!2d106.69912411405635!3d10.77190059232457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f40c7a0f411%3A0xe272a9c70ba4a66e!2zNjUgxJDGsOG7nW5nIEh14buzbmggVGjDumMgS2jDoW5nLCBC4bq_biBOZ2jDqSwgUXXhuq1uIDEsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1597034058438!5m2!1svi!2s" width="280" height="320" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</ul>
				</div>
			</div>
			
			<div class="main">
				<h1>Liên Hệ</h1>
				<h3>Điền thông tin và ý kiến của bạn vào mẫu bên dưới</h3>
				<p>
					Cách thứ 1: Người dùng có thể liên lạc với hệ thống thư viện thông qua E-mail.Các ý kiến của đọc giả sẽ được được nhân viên thủ thư kiểm tra và phản hồi trong thời gian sớm nhất.
					<br>
					Cách thứ 2: Đọc giả có thể liên hệ trực tiếp qua Zalo.
				</p>
				<form action="{{ url('send-mail') }}" method="post" role="form" class="message">

					@csrf
					<label>Mã Số Sinh Viên</label>
					<input type="text" name="MSHS" value="" placeholder="Vui lòng nhập đúng mã số (Phải nhập số từ 0-9)">
					<label>Họ Tên</label>
					<input type="text" name="Ten" value="" placeholder="Vui lòng nhập đúng tên"  >
					<label>Email</label>
					<input type="text" name="Email" value="" placeholder="Vui lòng nhập đúng tên email của thư viện" >
					<label>Nội Dung</label>
					<textarea name="message" placeholder="Bao gồm các nội dung sau:
1.Ghi địa chỉ email của người dùng muốn phản hồi với hệ thống thư viện
2.Tiêu đề nội dung.
3.Nội dung cần phản hồi.
(Thông tin phản hồi sẽ sớm được gửi lại người dùng sớm nhất có thể.)"></textarea>
					<input type="submit" value="GỬI">
				</form>
			</div>
		</div>

</div>

@if(Session::has('success'))
    	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
	    <script type="text/javascript">
		    swal("E-mail Đã Được Gửi Thành Công!","Chọn OK để tiếp tục!","success");
	    </script>
@endif
@endsection