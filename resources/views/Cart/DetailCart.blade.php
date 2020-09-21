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
  <div class="body">
    @if(Session::has('cart') != null)
      @if(Session::has('flash_mess'))
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script type="text/javascript">
           swal("Số lượng sách không hợp lệ vui lòng xem chi tiết bên dưới!","Chọn OK để tiếp tục","warning");
        </script>
         
            <h5 style="text-align: center;" class="alert alert-danger">{{Session::get('flash_mess')}} 
              <button type="button" id="button" onclick="hien()"> Xem Thông Tin Số Lượng Sách Đã Mượn</button>
            </h5>
            <div class="cart_section" id="hiden">
              <div class="container-fluid">
                <form>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                      <button type="button" id="button_hide_form" onclick="an()"><i class="fas fa-times"></i></button>
                        <div class="cart_container">
                            <div class="cart_title">Xem Thông Tin Số Lượng Sách Đã Mượn</div>
                            @foreach(Session::get('cart')->sanpham as $item)
                            <div class="cart_items">
                                <ul class="cart_list">
                                    <li class="cart_item clearfix" id="li">
                                        <div class="cart_item_image"><img src="HinhAnh/{{$item['ttsanpham']->MA_HA}}" alt=""></div>
                                        <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between" id="div">
                                            <div class="cart_item_name cart_info_col" style="width: 250px;">
                                                <div class="cart_item_title">Tên sách</div>
                                                <div class="cart_item_text">{{$item['ttsanpham']->TEN_SACH}}</div>
                                            </div>
                                            <div class="cart_item_name cart_info_col" style="width: 250px;">
                                                <div class="cart_item_title">Mã sách</div>
                                                <div class="cart_item_text">{{$item['ttsanpham']->MA_SACH}}</div>
                                            </div>
                                            <div id="div_quantity" class="cart_item_quantity cart_info_col" style="margin-left:35px;width: 400px;text-align: center;">
                                                <div class="cart_item_title">Tổng Số Lượng Sách</div>
                                                <div class="cart_item_text">{{$item['ttsanpham']->SO_LUONG}}</div>
                                            </div>
                                            <div id="div_quantity" class="cart_item_quantity cart_info_col" style="margin-left:35px;width: 400px;text-align: center;">
                                                <div class="cart_item_title">Tổng Số Lượng Sách Đã Mượn</div>
                                                <div class="cart_item_text">{{$item['ttsanpham']->SO_LUONG_MUON}}</div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                </form>
              </div>
            </div>
      @endif
      
      <div class="cart_section">
        <div class="container-fluid">
          <form action="{{route('xac-nhan-phieu-muon')}}" method="POST">
          @csrf
           <div class="row">
               <div class="col-lg-10 offset-lg-1">
                   <div class="cart_container">
                       <div class="cart_title">Thông Tin Phiếu Mượn</div>
                       <div class="info_cart">
                        <!-- <h5>Mã Phiếu Mượn: 1</h5> -->
                        <h5>Tên Đọc Giả: {{Auth::guard('customer')->user()->TEN_DOC_GIA}}</h5>
                        <h5 name = "MA_DOC_GIA">Mã Đọc Giả: {{Auth::guard('customer')->user()->MA_SO_THE}}</h5>
                       </div>
                       @foreach(Session::get('cart')->sanpham as $item)
                       <div class="cart_items">
                           <ul class="cart_list">
                               <li class="cart_item clearfix" id="li">
                                   <div class="cart_item_image"><img src="HinhAnh/{{$item['ttsanpham']->MA_HA}}" alt=""></div>
                                   <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between" id="div">
                                      <div class="cart_item_name cart_info_col" style="width: 250px;">
                                           <div class="cart_item_title">Tên sách</div>
                                           <div class="cart_item_text">{{$item['ttsanpham']->TEN_SACH}}</div>
                                      </div>
                                      <div class="cart_item_name cart_info_col" style="width: 250px;">
                                           <div class="cart_item_title">Mã sách</div>
                                           <div class="cart_item_text">{{$item['ttsanpham']->MA_SACH}}</div>
                                      </div>
                                      <div id="div_quantity" class="cart_item_quantity cart_info_col" style="margin-left:35px;width: 400px;text-align: center;">
                                          <div class="cart_item_title">Số Lượng</div>
                                         <!--  <div class="cart_item_text">{{$item['quanty']}}</div> -->
                                          <div class="number">
                                            <span class="minus">-</span>
                                            <input type="text" class="nameinput" onkeyup="check()" data-id="{{$item['ttsanpham']->id}}" id="{{$item['ttsanpham']->id}}" value="{{$item['quanty']}}" name="SO_LUONG" />
                                            <span class="plus">+</span>
                                          </div>
                                      </div>
                                      
                                      <div class="cart_item_name cart_info_col" id="div_a">
                                           <!-- <div class="cart_item_title">Xóa</div> -->
                                           <div class="edit-all" style="margin-top: 60px;"><a onclick="DeleteCart({{$item['ttsanpham']->id}})" href="javascript:" type="button" class="card-link-secondary small text-uppercase mr-3"><i class="fas fa-trash-alt mr-1"></i></a></div>
                                      </div>
                                   </div>
                               </li>
                           </ul>
                       </div>
                       @endforeach
                        <div class="button_save">
                        <div class="edit-all"><a id="update" type="button" class="card-link-secondary small text-uppercase mr-3"><h6>Cập Nhật Phiếu Mượn</h6></a></div>
                        </div>
                        
                       <div class="order_total">
                           <div class="order_total_content text-md-right">
                              <div class="order_total_date" >Ngày Lập Phiếu <b id="date" name= "NGAY_MUON"></b></div>
                              <div class="order_total_date_end" >Hạn Trả <b id="end_date" name= "HAN_TRA"></b></div>
                              <div class="order_total_title">Tổng Số Lượng Sách</div>
                              <div class="order_total_amount" name= "SO_LUONG">{{Session::get('cart')->TongSL}}</div>
                           </div>
                       </div>
                       <div class="cart_buttons"> <button type="button" onclick="window.location.href='{{route('trang-chu')}}'" class="button cart_button_clear">Trở Về Trang Chủ</button> <button type="submit" id="test" class="button cart_button_checkout">Xác Nhận Phiếu Mượn</button> </div>
                   </div>
               </div>
           </div>
          </form>
        </div>
      </div>
    @else
      <div class="cart_section">
        <div class="container-fluid">
           <div class="row">
               <div class="col-lg-10 offset-lg-1">
                   <div class="cart_container">
                      <div class="detail_null"> 
                      <h3> Chưa có sản phẩm</h3>
                      <img class="img" onclick="window.location='{{route('tat-ca-sach')}}'" src="../HinhAnh/detail_cart_null.jpg" style="border-radius: 50%;"/>
                      </div>
                      <!-- <div class="cart_buttons"> <button type="button" onclick="window.location.href='{{route('trang-chu')}}'" style="background-color:#21e2d0;" class="button cart_button_clear"><b>Lịch Sử Tạo Phiếu Mượn</b></button> 
                      </div> -->
               </div>
           </div>
        </div>
      </div>
    @endif
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
        $('.minus').click(function () {
          var $input = $(this).parent().find('input');
          var count = parseInt($input.val()) - 1;
          count = count < 1 ? 1 : count;
          $input.val(count);
          $input.change();
          return false;
        });
        $('.plus').click(function () {
          var $input = $(this).parent().find('input');
          $input.val(parseInt($input.val()) + 1);
          $input.change();
          return false;
        });
       
      });
    </script>
    <script type="text/javascript">
      function addDays(dateObj, numDays) {
       dateObj.setDate(dateObj.getDate() + numDays);
       return dateObj;
      }
      var today = new Date();
      var date  = today.getDate()+'/'+(today.getMonth()+1)+'/'+today.getFullYear();
      var end_date  = addDays(today, 15);
      var last_date  = end_date.getDate()+'/'+(end_date.getMonth()+1)+'/'+end_date.getFullYear();
      document.getElementById("date").innerHTML = date;
      document.getElementById("end_date").innerHTML = last_date;
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/styles/metro/notify-metro.css" />
    
  	
    <script type="text/javascript">
      function DeleteCart(id) {
        $.ajax({
          url: 'xoa-san-pham-cart/'+id,
          type: 'GET',
        }).done(function(response) {
          $(".bpdy .cart_section .cart_container").empty();
          $(".body .cart_section .cart_container").html(response);
          location.reload();       
        })
        location.reload();
        swal("Xóa Sản Phẩm Thành Công!","Chọn OK để tiếp tục!","success");
      }

      $(".edit-all #update").on("click", function(){
        var list=[];
        $(".cart_container .cart_items .cart_list #li #div #div_quantity").each(function(){
          $(this).find("input").each(function(){
            var element = {key: $(this).data("id"), value: $(this).val()};
            list.push(element);
          });
        });
        $.ajax({
          url: 'cap-nhat-san-pham',
          type: 'POST',
          data: {
            "_token": "{{ csrf_token() }}",
            "data" : list
          }
        }).done(function(response) {
          swal("Cập Nhật Phiếu Mượn Thành Công!","Chọn OK để tiếp tục!","success");
          location.reload();
         
        })
        //console.log(list);
      });
    </script>
    <script type="text/javascript">
    function hien(){
      document.getElementById("hiden").style.display = "block";
      document.getElementById("button").style.display = "none";
    }
    function an(){
      document.getElementById("hiden").style.display = "none";
      document.getElementById("button").style.display = "block";
    }
  </script>
    <script type="text/javascript">
      function check(){
        var check = document.querySelectorAll(".nameinput")[0].value;
        //console.log(check);
          if(check < 0){
            swal("Số Lượng Sách Không Hợp Lệ","Chọn OK để tiếp tục!","error");
            location.reload();
          }
        var letter=/^[0-9]+$/;
          if(!check.match(letter)){
           swal("Số Lượng Sách Không Hợp Lệ","Chọn OK để tiếp tục!","error");
           location.reload();          
          }
        }
    </script>
  </div>
@endsection
</html>
