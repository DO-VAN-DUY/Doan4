@extends("layout")
@section('content')
@include("hozizontal")
@include("slide");
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-12 text-center">
                              <div class="breadcrumb__text">
                                  <h2>Vegetable’s Package</h2>
                                  <div class="breadcrumb__option">
                                      <a href="./index.html">Home</a>
                                      <a href="./index.html">Vegetables</a>
                                      <span>Vegetable’s Package</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
 </section>
 <section class="product-details spad">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-6 col-md-6">
                              <div class="product__details__pic">
                                  <div class="product__details__pic__item">
                                      <img class="product__details__pic__item--large"
                                          src="{{url('upload')}}/images/{{$pro->Anh}}" alt="">
                                  </div>
                                  {{-- <div class="product__details__pic__slider owl-carousel">
                                      <img data-imgbigurl="img/product/details/product-details-2.jpg"
                                          src="" alt="">
                                      <img data-imgbigurl="img/product/details/product-details-3.jpg"
                                          src="img/product/details/thumb-2.jpg" alt="">
                                      <img data-imgbigurl="img/product/details/product-details-5.jpg"
                                          src="img/product/details/thumb-3.jpg" alt="">
                                      <img data-imgbigurl="img/product/details/product-details-4.jpg"
                                          src="img/product/details/thumb-4.jpg" alt="">
                                  </div> --}}
                              </div>
                          </div>
                          <div class="col-lg-6 col-md-6">
                              <div class="product__details__text">
                                  <h3>{{$pro->Tensp}}</h3>
                                  <div class="product__details__rating">
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star-half-o"></i>
                                      <span>(18 reviews)</span>
                                  </div>
                                  <div class="product__details__price">Giá bán:{{number_format($pro->giamoi)}} vnđ</div>
                                  <p>{{$pro->Mota}}</p>
                                  <div class="product__details__quantity">
                                      <div class="quantity">
                                          <div class="pro-qty">
                                              <input type="text" value="1">
                                          </div>
                                      </div>
                                  </div>
                                  <a href="{{route('addToCart',['id'=>$pro->id])}}" class="primary-btn">ADD TO CARD</a>
                                  {{-- <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a> --}}
                                  <ul>
                                      <li><b>Availability</b> <span>In Stock</span></li>
                                      <li><b>Shipping</b> <span>01 day shipping. <samp>Free pickup today</samp></span></li>
                                      <li><b>Weight</b> <span>0.5 kg</span></li>
                                      <li><b>Share on</b>
                                          <div class="share">
                                              <a href="#"><i class="fa fa-facebook"></i></a>
                                              <a href="#"><i class="fa fa-twitter"></i></a>
                                              <a href="#"><i class="fa fa-instagram"></i></a>
                                              <a href="#"><i class="fa fa-pinterest"></i></a>
                                          </div>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <div class="col-lg-12">
                              <div class="product__details__tab">
                                  <ul class="nav nav-tabs" role="tablist">
                                      <li class="nav-item">
                                          <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                              aria-selected="true">Description</a>
                                      </li>
                                      {{-- <li class="nav-item">
                                          <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                              aria-selected="false">Information</a>
                                      </li>
                                      <li class="nav-item">
                                          <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                              aria-selected="false">Reviews <span>(1)</span></a>
                                      </li> --}}
                                  </ul>
                                  <div class="tab-content">
                                      <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                          <div class="product__details__tab__desc">
                                              <h6>Products Infomation</h6>
                                              <p>{{$pro->Thongtin}}</p>
                                          </div>
                                      </div>
                                     
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              <!-- <section>
                <iframe src="/views/binhluan.php?idsp=<?=$_GET['id']?>" width="100%"height="400px" frameborder="0"></iframe>
              </section> -->
              <section class="related-product">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-12">
                              <div class="section-title related__product__title">
                                  <h2>Related Product</h2>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                        @foreach($produ as $item)
                          <div class="col-lg-3 col-md-4 col-sm-6">
                             
                              <div class="product__item">
                                  <div class="product__item__pic set-bg" data-setbg="/upload/images/{{$item->Anh}}">
                                    <img class="hover-img" src="/upload/images/{{$item->Anh}}" alt="#">
                                      <ul class="product__item__pic__hover">
                                          <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                          <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                          <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                      </ul>
                                  </div>
                                  <div class="product__item__text">
                                      <h6><a href="#">{{$item->Tensp}}</a></h6>
                                      <h6>Giá bán:<span style="color:#e29034"> {{number_format($item->giamoi)}} <sup>đ</sup></span></h6>
                                      Giá bán:<span style="color:#e29034; text-decoration: line-through;"> {{number_format($item->giacu)}} <sup>đ</sup></span>
                                      
                                  </div>
                              </div>
                             
                          </div>
                          @endforeach

                      </div>
                  </div>
              </section>
@endsection