@extends('Index')
@section('main-content')
<div id="contents" >
		<div id="adbox">
			<div class="clearfix">
				<img src="images/book.jpg" alt="Img" height="382" width="594">
				<div class="detail">
					<h1>Cuộc đời không giống như một quyển sách, đọc phần đầu là đoán được phần cuối. Cuộc đời bí ẩn và thú vị hơn nhiều</h1>
				</div>
			</div>
		</div>
	</br>
		<div class="clearfix" >
			<div class="sidebar">
				<div>
					<h2>SỰ KIỆN</h2>
					@foreach($listEvent as $event)
					<div>
						<b style="font-size: 20px;">{{$event->TIEU_DE_TIN_TUC}}</b>
						<br>
						<p>
						{{$event->NOI_DUNG_GIOI_THIEU}}<a href="http://vuthuvien.bvhttdl.gov.vn/articledetail.aspx?sitepageid=418&articleid=10889" style="color: blue;">Xem Thêm</a>
						</p>
						<img src="../news/{{$event->TEN_HA}}" alt="IMG" style="width: 220px; height:160px;">
					</div>
					<hr style="border-top-width: 2px; border-top-color: rgb(31, 29, 29);">
					@endforeach					
				</div>
			</div>
			<div class="main" >
				<h1>TIN TỨC</h1>
				<ul class="news" >
					@foreach($listNews as $news)
					<li >
						<div>
							<div class="box" onclick="window.location = '{{route('xem-chi-tiet-tin-tuc',['id' => $news->id])}} ' ">
								<img  src="../news/{{$news->TEN_HA}}" alt="Img" style="width: 180px; height: 150px">
							</div>
							<h2 id="nd_gt">{{$news->TIEU_DE_TIN_TUC}}</h2>
							<p >
								{{$news->NOI_DUNG_GIOI_THIEU}}
								<br>
								<a style="color: blue;"  href="{{route('xem-chi-tiet-tin-tuc',['id' => $news->id])}}" >Xem Thêm</a>
							</p>
							
						</div>
					</li>
					@endforeach
					
				</ul>
			</div>
			<div style="margin-left: 40%;">{{$allNews->links()}}</div>
		</div>
	</div>
@endsection
