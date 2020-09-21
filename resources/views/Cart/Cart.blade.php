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
              <h4 class="item-total">Tổng Số Lượng: {{Session::get('cart')->TongSL}} quyển</h4>
              <button class="btn_submit" onclick="window.location.href='{{route('xem-chi-tiet-phieu-muon')}}'">Xem Chi Tiết</button>
              </div>
              @elseif(Session::has('cart') == null)
              <div class="shop">
                  <ul class="shopping-cart-items">
                    <li class="clearfix">
                      <img src="HinhAnh/icon_shop.jpg" style="width: 120px; border-radius: 50%; margin-left: 100px; margin-top: 15px;" alt="item1" />
                    </li>
                  </ul>
                  <h6>Chưa Có Sản Phẩm</h6>
              <div>
@endif