<div class="header-inner" style="background-color:#fff" >
    <div class="container">
        <div class="cat-nav-head">
            <div class="row">
                <div class="col-lg-3" >
                    <div class="all-category">
                        <h3 class="cat-heading" style="color: #111;text-transform: uppercase;background-color:rgb(19, 203, 31)"><i class="fa fa-bars" aria-hidden="true"></i><b>CATEGORY LIST</b></h3>
                        <ul class="main-category">
                            
                          @foreach($catery as $value)
                          <li><a href="{{route('shop_details',['Tenloai'=>$value->Tenloai])}}">{{$value->Tenloai}}</a></li>
                          @endforeach
                        </ul>
                    </div>
                </div>
                {{-- <div class="col-lg-3">
                  <div class="hero__categories">
                      <div class="hero__categories__all">
                          <i class="fa fa-bars"></i>
                          <span>CATEGORY LIST</span>
                      </div>
                      <ul style="position: absolute">
                          @foreach($catery as $value)
                                  <li><a href="{{route('shop_details',['Tenloai'=>$value->Tenloai])}}">{{$value->Tenloai}}</a></li>
                                  @endforeach
                      </ul>
                  </div>
              </div> --}}
                
                {{-- <div class="col-lg-9 col-12">
                    <div class="menu-area" style="background-color:#fff">
                        <!-- Main Menu -->
                        <nav class="navbar navbar-expand-lg">
                            <div class="navbar-collapse">
                                <div class="nav-inner">
                                <ul class="nav main-menu menu navbar-nav">
                                            <li class="active"><a href="#" style="color: #111">TRANG CHỦ</a></li>
                                            <li><a href="#" style="color: #111">SẢN PHẨM</a></li>
                                            <li><a href="#" style="color: #111">DỊCH VỤ</a></li>
                                            <li><a href="#" style="color: #111">CỬA HÀNG<i class="ti-angle-down"></i><span class="new">NEW</span></a>
                                                <ul class="dropdown">
                                                    <li><a href="cart.html">GIỎ HÀNG</a></li>
                                                    <li><a href="checkout.html">THANH TOÁN</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#" style="color: #111">TIN TỨC</a></li>
                                            {{-- <li><a href="#" style="color: #111">DIỄN ĐÀM<i class="ti-angle-down"></i></a>
                                                <ul class="dropdown">
                                                    <li><a href="blog-single-sidebar.html">Blog Single Sidebar</a></li>
                                                </ul>
                                            </li> --}
                                            <li><a href="contact.html" style="color: #111">LIÊN HỆ</a></li>
                                        </ul>
                                </div>
                            </div>
                        </nav>
                        <!--/ End Main Menu -->
                    </div>
                </div> --}}
                <div class="col-lg-9">
                  <div class="hero__search">
                      <div class="hero__search__form">
                          <form method="get" action="{{route('search')}}">
                             
                              <input  type="text" placeholder="What do you need?" name="key">
                              <button type="submit" class="site-btn">SEARCH</button>
                          </form>
                      </div>
                      <div class="hero__search__phone">
                          <div class="hero__search__phone__icon">
                              <i class="fa fa-phone"></i>
                          </div>
                          <div class="hero__search__phone__text">
                              <h5>+0376419034</h5>
                              <span>support 24/7 time</span>
                          </div>
                      </div>
                  </div>
            </div>
        </div>
    </div>
</div>
</header>
{{-- <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    width: 100%;
    margin: auto;
  }
  </style>
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <div class="hero__categories">
                <div class="hero__categories__all">
                    <i class="fa fa-bars"></i>
                    <span>All departments</span>
                </div>
                <ul>
                    @foreach($catery as $value)
                            <li><a href="{{route('shop_details',['Tenloai'=>$value->Tenloai])}}">{{$value->Tenloai}}</a></li>
                            @endforeach
                </ul>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="hero__search">
                <div class="hero__search__form">
                    <form action="#">
                       
                        <input type="text" placeholder="What do you need?">
                        <button type="submit" class="site-btn">SEARCH</button>
                    </form>
                </div>
                <div class="hero__search__phone">
                    <div class="hero__search__phone__icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="hero__search__phone__text">
                        <h5>+0376419034</h5>
                        <span>support 24/7 time</span>
                    </div>
                </div>
            </div>
            
  <div class="container">
      <br>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
    
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox" style="height:500px">
    
          <div class="item active">
            <img src="/upload/images/img1.jpg" alt="Chania" width="460" style="height: 500px">
            <div class="carousel-caption">
              <h3>GARDER</h3>
              <p>Is a place people do not miss when intending to buy office plants.</p>
            </div>
          </div>
    
          <div class="item">
            <img src="/upload/images/img2.jpg" alt="Chania" width="460" style="height: 500px">
            <div class="carousel-caption">
              <h3>GARDER</h3>
              <p>A variety of office plants for everyone to choose from.</p>
            </div>
          </div>
        
          <div class="item">
            <img src="/upload/images/img9.jpg" alt="Flower" width="460" style="height: 500px">
            <div class="carousel-caption">
              <h3>GARDER</h3>
              <p>There are a lot of beautifully decorated trees here.</p>
            </div>
          </div>
    
          <div class="item">
            <img src="/upload/images/anh_header2.jpg" alt="Flower" width="460" style="height: 500px">
            <div class="carousel-caption">
              <h3>GARDER</h3>
              <p>
                The staff here are very friendly.</p>
            </div>
          </div>
      
        </div>
    
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
        </div>
    </div>
</div> --}}
