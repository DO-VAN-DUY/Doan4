@extends("layout")
@section('content')
@include("hozizontal")
@include("slide");
<section class="product spad">
                  <div class="container">
                    <div class="nav-main">
                        <!-- Tab Nav -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#man" role="tab" style="color: #111">Phân loại sản phẩm</a></li>
                            @foreach($portfolio as $value)
                            {{-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="{{route('shop_tsp',['Tensp'=>$value->Tensp])}}" role="tab" style="color: #111">{{$value->Tensp}}</a></li> --}}
                            <li><a href="{{route('shop_tsp',['Tensp'=>$value->Tensp])}}">{{$value->Tensp}}</a></li>
                            @endforeach
                            
                        </ul>
                        <!--/ End Tab Nav -->
                    </div>
                      <div class="row">
                          <div class="col-lg-3 col-md-5">
                              <div class="sidebar">
                                  <div class="sidebar__item">
                                      <h4>Price</h4>
                                      <div class="price-range-wrap">
                                          <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                              data-min="10" data-max="540">
                                              <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                              <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                              <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                          </div>
                                          <div class="range-slider">
                                              <div class="price-input">
                                                  <input type="text" id="minamount">
                                                  <input type="text" id="maxamount">
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="sidebar__item sidebar__item__color--option">
                                      <h4>Colors</h4>
                                      <div class="sidebar__item__color sidebar__item__color--white">
                                          <label for="white">
                                              White
                                              <input type="radio" id="white">
                                          </label>
                                      </div>
                                      <div class="sidebar__item__color sidebar__item__color--gray">
                                          <label for="gray">
                                              Gray
                                              <input type="radio" id="gray">
                                          </label>
                                      </div>
                                      <div class="sidebar__item__color sidebar__item__color--red">
                                          <label for="red">
                                              Red
                                              <input type="radio" id="red">
                                          </label>
                                      </div>
                                      <div class="sidebar__item__color sidebar__item__color--black">
                                          <label for="black">
                                              Black
                                              <input type="radio" id="black">
                                          </label>
                                      </div>
                                      <div class="sidebar__item__color sidebar__item__color--blue">
                                          <label for="blue">
                                              Blue
                                              <input type="radio" id="blue">
                                          </label>
                                      </div>
                                      <div class="sidebar__item__color sidebar__item__color--green">
                                          <label for="green">
                                              Green
                                              <input type="radio" id="green">
                                          </label>
                                      </div>
                                  </div>
                                  <div class="sidebar__item">
                                      <h4>Popular Size</h4>
                                      <div class="sidebar__item__size">
                                          <label for="large">
                                              Large
                                              <input type="radio" id="large">
                                          </label>
                                      </div>
                                      <div class="sidebar__item__size">
                                          <label for="medium">
                                              Medium
                                              <input type="radio" id="medium">
                                          </label>
                                      </div>
                                      <div class="sidebar__item__size">
                                          <label for="small">
                                              Small
                                              <input type="radio" id="small">
                                          </label>
                                      </div>
                                      <div class="sidebar__item__size">
                                          <label for="tiny">
                                              Tiny
                                              <input type="radio" id="tiny">
                                          </label>
                                      </div>
                                  </div>
                                 
                              </div>
                          </div>
                          <style>
                              img{
                                  height: 262px;
                              }
                              #myTab
                              {
                                  font-size: 14px;
                              }
                              li:hover{
                                background-color:#e29034;
                                
                              }
                          </style>
                          <div class="col-lg-9 col-md-7">
                          @foreach($productsp as $value)
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                        
                                        <div class="product__item">
                                            <div class="product__item__pic set-bg" data-setbg="/upload/images/{{$value->Anh}}">
                                                <img class="default-img" src="/upload/images/{{$value->Anh}}" alt="#">
                                                <ul class="product__item__pic__hover">
                                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                           <div class="product__item__text">
                                              <h5><a href="{{route('product_details',['id'=>$value->id])}}" style="color: rgb(219, 9, 9)">{{$value->Tensp}}</a></h5>
                                              <h6>Giá bán:<span style="color:#e29034"> {{number_format($value->giamoi)}} <sup>đ</sup></span></h6>
                                              Giá bán:<span style="color:#e29034; text-decoration: line-through;"> {{number_format($value->giacu)}} <sup>đ</sup></span>
                                              
                                           </div>
                                        </div>
                                        
                                    </div>
                                    @endforeach
                                    
                          </div>
                                   
                                    {{-- <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img class="default-img" src="upload/images/{{$spm->Anh}}" alt="#">
                                                    <img class="hover-img" src="upload/images/{{$spm->Anh}}" alt="#">
                                                </a>
                                                <div class="button-head">
                                                    <div class="product-action">
                                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Xem to</span></a>
                                                        <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Yêu thích</span></a>
                                                        <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Đối chiếu</span></a>
                                                    </div>
                                                    <div class="product-action-2">
                                                        <a title="Thêm vào giỏ" href="#">Thêm vào giỏ</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="#">Tên sản phẩm: <span style=" color: red">{{$spm->Tensp}}</span></a></h3>
                                                <div class="product-price">
                                                Giá bán:<span style="color:#e29034"> {{number_format($spm->giamoi)}} <sup>đ</sup></span>
                                                </div>
                                                <div class="product-price" style="text-decoration: line-through;opacity: 0.5;">
                                                    Giá bán:<span style="color:#e29034"> {{number_format($spm->giacu)}} <sup>đ</sup></span>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach --}}


                      </div>
                                  
                              <div class="product__pagination">
                                  <a href="#">1</a>
                                  <a href="#">2</a>
                                  <a href="#">3</a>
                                  <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              @endsection