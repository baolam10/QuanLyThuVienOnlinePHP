<!DOCTYPE html>
<html>
<head>
  <title>Chi Tiết Phiếu Mượn</title>
  <link rel="stylesheet" href="{{ asset('css/detail_cart.css') }}" type="text/css" />
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
  <style type="text/css">
    #hiden {
      display: none;
    }
  </style>

</head>
@extends('Index')
@section('main-content')
  <body >

        <div class="cart_section">
        <div class="container-fluid">
          <form action="#" method="GET">
          @csrf
           <div class="row">
               <div class="col-lg-12 offset-lg">
                   <div class="cart_container">
                       <div class="cart_title">Lịch Sử Mượn - Trả</div>
                       <div class="info_cart">
                        @if(count($PhieuMuon) <= 0)
                        <div style="margin-left: 40%;">
                          <h3> Chưa tồn tại phiếu mượn</h3>
                          <img class="img" onclick="window.location='{{route('tat-ca-sach')}}'" src="../HinhAnh/detail_cart_null.jpg" style="border-radius: 50%;"/>
                        </div>
                        @else
                        <h3>Tên Đọc Giả: {{Auth::guard('customer')->user()->TEN_DOC_GIA}}</h3>
                        <h6 style="float: right;">(*) <i>Nếu tình trạng là 1: Phiếu mượn đã được hoàn trả!</i> <br><i>Nếu tình trạng là 0: Phiếu mượn đã chưa được hoàn trả!</i></h6>
                        <h3 name = "MA_DOC_GIA">Mã Đọc Giả: {{Auth::guard('customer')->user()->MA_SO_THE}}</h3>

                       </div>
                       
                       <div class="cart_items" >
                           <ul class="cart_list">
                            @foreach($PhieuMuon  as $key => $item)
                               <li class="cart_item clearfix" id="cart_list_ls">
                                   
                                   <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between" id="div">
                                      <div class="cart_item_name cart_info_col" style="width: 250px; margin-left: 18px;">
                                           <div class="cart_item_title">Mã Phiếu Mượn</div>
                                           <div class="cart_item_text">{{$item->MA_PHIEU_MUON}}</div>
                                      </div>
                                      <div class="cart_item_name cart_info_col" style="width: 150px;">
                                           <div class="cart_item_title">Tổng Mượn</div>
                                           <div class="cart_item_text">{{$item->SO_LUONG}}</div>
                                      </div>
                                      <div class="cart_item_name cart_info_col" style="width: 250px;">
                                           <div class="cart_item_title">Ngày Mượn</div>
                                           <div class="cart_item_text">{{$item->NGAY_MUON}}</div>
                                      </div>
                                      <div class="cart_item_name cart_info_col" style="width: 250px;">
                                           <div class="cart_item_title">Hạn Trả</div>
                                           <div class="cart_item_text">{{$item->HAN_TRA}}</div>
                                      </div>
                                      
                                      <div class="cart_item_name cart_info_col" style="width: 250px; margin-right: -30px;">
                                           <div class="cart_item_title">Tình Trạng</div>
                                           <div class="cart_item_text">{{$item->TINH_TRANG}}</div>
                                      </div>
                                      
                                      <div class="cart_item_name cart_info_col">
                                           <div class="cart_item_title">Xem Chi Tiết</div> 
                                           <div class="cart_item_text" style="margin-top: 8px;"><a href="{{ route('chi-tiet-lich-su-muon-tra',$item->created_at)}}" type="button" class="card-link-secondary small text-uppercase"><i class="fas fa-external-link-alt"></i> </a></div>
                                      </div> 
                                                                       
                                   </div>
                               </li>
                               @endforeach
                           </ul>
                       </div>
                       @endif
                       
                        
                   </div>
               </div>
           </div>
          </form>
        </div>
      </div>
    
    
    
  </body>
@endsection
</html>
