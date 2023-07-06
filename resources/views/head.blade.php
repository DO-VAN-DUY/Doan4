@include("top")
        <!-- End Topbar -->
     
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="/"><img src="/upload/images/logo.jpg" style="height: 150px" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-8" style="top:25px;">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="/">Trang chủ</a></li>
                            <li><a href="./introduce">Giới thiệu</a></li>
                            <li><a href="./shop-grid.html">Sản phẩm</a></li>
                            {{-- <li>
                                <a href="#">Cửa hàng</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.html">Giỏ Hàng</a></li>
                                    <li><a href="./shoping-cart.html">Sản phẩm</a></li>
                                   
                                </ul>
                            </li> --}}
                            <li><a href="./news">Tin tức</a></li>
                            <li><a href="./contact.html">Liên hệ</a></li>
                        </ul>
                    </nav>
                    
                </div>
                 
                <div class="col-lg-2 col-md-3 col-12" style="padding-top: 30px; font-size: 16px">
                    <div class="right-bar">
                        <div class="sinlge-bar shopping">
                            <a href="/showCart" class="fa fa-shopping-bag"><span class="total-count">{{$cart->total_quantity}}</span></a>
                            
                            <div class="shopping-item">
                                <div class="dropdown-cart-header">
                                    <span>{{$cart->total_quantity}} Items</span>
                                    <a href="#">View Cart</a>
                                </div>
                                @foreach ($cart->items as $item)
                                <ul class="shopping-list">
                                    <li>
                                        <a href="{{route('cart.remove',['id'=>$item['id']])}}" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
                                        <a class="cart-img" href="#"><img src="upload/images/{{$item['Anh']}}" alt="#"></a>
                                        <h4><a href="#">{{$item['Tensp']}}</a></h4>
                                        <p class="quantity">{{$item['quantity']}} x - <span class="amount">{{$item['giaban']}}</span></p>
                                    </li>
                                </ul>
                                @endforeach
                                <div class="bottom">
                                    <div class="total">
                                        <span>Total</span>
                                        <span class="total-amount">{{number_format($cart->total_price)}}</span>
                                    </div>
                                    <a href="/showCart" class="btn animate">Checkout</a>
                                </div>
                            </div>
                           
                        </div>
                        <div class="sinlge-bar">
                            <div class="header__cart__price">item: {{number_format($cart->total_price)}}</div>
                        </div>
                    </div>
                </div>
                
                
               
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
       <style>
           .header__logo img
           {
            border-radius:50%;
            -moz-border-radius:50%;
            -webkit-border-radius:50%;
           }
       </style>
        <!-- Header Inner -->

