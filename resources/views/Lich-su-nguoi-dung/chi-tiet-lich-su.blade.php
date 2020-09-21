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
                        <!-- <h5>Mã Phiếu Mượn: 1</h5> -->
                        <h3>Tên Đọc Giả: {{Auth::guard('customer')->user()->TEN_DOC_GIA}}</h3>
                        <h3 name = "MA_DOC_GIA">Mã Đọc Giả: {{Auth::guard('customer')->user()->MA_SO_THE}}</h3>
                       </div>
                       
                       <div class="cart_items" >
                           <ul class="cart_list">
                            @foreach($PhieuMuon  as $key => $item)
                               <li class="cart_item clearfix" id="cart_list_ls">
                                   <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between" id="div">
                                      <div class="cart_item_name cart_info_col" style="width: 250px;">
                                           <div class="cart_item_title">Mã Phiếu Mượn</div>
                                           <div class="cart_item_text">{{$item->MA_PHIEU_MUON}}</div>
                                      </div>
                                      <div class="cart_item_name cart_info_col" style="width: 250px;">
                                           <div class="cart_item_title">Mã Sách</div>
                                           <div class="cart_item_text">{{$item->MA_SACH}}</div>
                                      </div>
                                      <div class="cart_item_name cart_info_col" style="width: 250px;">
                                           <div class="cart_item_title">Số Lượng</div>
                                           <div class="cart_item_text">{{$item->SO_LUONG}}</div>
                                      </div>
                                      <div class="cart_item_name cart_info_col" style="width: 250px;">
                                           <div class="cart_item_title">Tình Trạng</div>
                                           <div class="cart_item_text">{{$item->TINH_TRANG}}</div>
                                      </div>                      
                                   </div>
                               </li>
                               @endforeach
                           </ul>
                       </div>
                       
                        
                   </div>
               </div>
           </div>
          </form>
        </div>
      </div>
    
    
    
  </body>
@endsection
</html>
