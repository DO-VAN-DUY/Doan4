@extends("layout")
@section('content')
@include("hozizontal")
@include("slide");  
<style>
                  img
                  {
                      height: 262px;
                  }
              </style>   
<div class="product-area section">
                  <div class="container">
                      <div class="row">
                          <div class="col-12">
                              <div class="section-title">
                                  <h2>Tìm kiếm Sản phẩm </h2>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-12">
                              <div class="product-info">
                                  
                                  <div class="tab-content" id="myTabContent">
                                    
                                      <div class="tab-pane fade show active" id="man" role="tabpanel">
                                          <div class="tab-single">
                                              <div class="row">
                                                  @foreach ($product as $sp)
                                                  <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                                      <div class="single-product">
                                                          <div class="product-img">
                                                              <a href="product-details.html">
                                                                  <img class="default-img" src="upload/images/{{$sp->Anh}}" alt="#">
                                                                  <img class="hover-img" src="upload/images/{{$sp->Anh}}" alt="#">
                                                              </a>
                                                              <div class="button-head">
                                                                  <div class="product-action">
                                                                      <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Xem to</span></a>
                                                                      <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Yêu thích</span></a>
                                                                      <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Đối chiếu</span></a>
                                                                  </div>
                                                                  <div class="product-action-2">
                                                                      <a title="Thêm vào giỏ" href="{{route('addToCart',['id'=>$sp->id])}}">Thêm vào giỏ</a>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="product-content">
                                                              <h3><a href="{{route('product_details',['id'=>$sp->id])}}">Tên sản phẩm: <span style=" color: red">{{$sp->Tensp}}</span></a></h3>
                                                              <div class="product-price">
                                                              Giá bán:<span style="color:#e29034"> {{number_format($sp->giamoi)}} <sup>đ</sup></span>
                                                              </div>
                                                              <div class="product-price" style="text-decoration: line-through;opacity: 0.5;">
                                                                  Giá bán:<span style="color:#e29034"> {{number_format($sp->giacu)}} <sup>đ</sup></span>
                                                               </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  @endforeach
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
          </div>
@endsection