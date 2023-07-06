@extends("layout")
@section('content')
@include("hozizontal")

@include("slide");
<!-- End Small Banner -->
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
                        <h2>Sản phẩm cửa hàng</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-info">
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
                       
                        <div class="tab-content" id="myTabContent">
                           
                            <div class="tab-pane fade show active" id="man" role="tabpanel">
                                
                                <div class="tab-single">
                                    <h5 class="col-12" style="background-color: #e29034; padding:10px;color:#fff;margin-top:25px" > Sản phẩm mới nhất</h5>
                                    <div class="row">
                                        
                                        @foreach ($top_product as $spm)
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="{{route('product_details',['id'=>$spm->id])}}">
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
                                                            <a title="Thêm vào giỏ" href="{{route('addToCart',['id'=>$spm->id])}}">Thêm vào giỏ</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="{{route('product_details',['id'=>$spm->id])}}">Tên sản phẩm: <span style=" color: red">{{$spm->Tensp}}</span></a></h3>
                                                    <div class="product-price">
                                                    Giá bán:<span style="color:#e29034"> {{number_format($spm->giamoi)}} <sup>đ</sup></span>
                                                    </div>
                                                    <div class="product-price" style="text-decoration: line-through;opacity: 0.5;">
                                                        Giá bán:<span style="color:#e29034"> {{number_format($spm->giacu)}} <sup>đ</sup></span>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="man" role="tabpanel">
                                <div class="tab-single">
                                    <h5 class="col-12" style="background-color: #e29034; padding:10px;color:#fff;margin-top:25px" > Sản phẩm giá cao</h5>
                                    <div class="row">
                                        
                                        @foreach ($spcao as $spc)
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="{{route('product_details',['id'=>$spc->id])}}">
                                                        <img class="default-img" src="upload/images/{{$spc->Anh}}" alt="#">
                                                        <img class="hover-img" src="upload/images/{{$spc->Anh}}" alt="#">
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Xem to</span></a>
                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Yêu thích</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Đối chiếu</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Thêm vào giỏ" href="{{route('addToCart',['id'=>$spc->id])}}">Thêm vào giỏ</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="{{route('product_details',['id'=>$spc->id])}}">Tên sản phẩm: <span style=" color: red">{{$spc->Tensp}}</span></a></h3>
                                                    <div class="product-price">
                                                    Giá bán:<span style="color:#e29034"> {{number_format($spc->giamoi)}} <sup>đ</sup></span>
                                                    </div>
                                                    <div class="product-price" style="text-decoration: line-through;opacity: 0.5;">
                                                        Giá bán:<span style="color:#e29034"> {{number_format($spc->giacu)}} <sup>đ</sup></span>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach


                                    </div>
                                </div>
                            </div>
                             
                        
                        
                        
                            <div class="tab-pane fade show active" id="man" role="tabpanel">
                                <div class="tab-single">
                                    <h5 class="col-12" style="background-color: #e29034; padding:10px;color:#fff;margin-top:25px" > Một số sản phẩm</h5>
                                    <div class="row">
                                        @foreach ($data as $sp)
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="{{route('product_details',['id'=>$sp->id])}}">
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
