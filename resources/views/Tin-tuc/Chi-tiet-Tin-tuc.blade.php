@extends('Index')
@section('main-content')
@foreach($listNews as $news)
<div id="contents">
	<div class="highlight">
		<div class="clearfix">
			
				<h2>{{$news->NOI_DUNG_GIOI_THIEU}}</h2>
				<p>
					{{$news->TIEU_DE_TIN_TUC}}
				</p>
				
			<h5 style="word-spacing: 5px; font-size: 18px;">
					{{$news->NOI_DUNG_CHINH}}
			</h5>
			</div>
			<br>
			<img src="../news/{{$news->TEN_HA}}" alt="Img" style="margin-left: 40%; height:280px; width: 350px;">
	</div>
</div>
@endforeach
@endsection
