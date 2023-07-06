@extends("layout")
@section('content')
@include("hozizontal")
@include("slide")
<section class="blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5">
                <div class="blog__sidebar">
                    <div class="blog__sidebar__search">
                        <form action="#">
                            <input type="text" placeholder="Search...">
                            <button type="submit"><span class="icon_search"></span></button>
                        </form>
                    </div>
                    <div class="blog__sidebar__item">
                        <h4>Categories</h4>
                        <ul>
                            @foreach($catery as $value)
                          <li><a href="{{route('shop_details',['Tenloai'=>$value->Tenloai])}}">{{$value->Tenloai}}</a></li>
                          @endforeach
                    
                        </ul>
                    </div>
                    <div class="blog__sidebar__item">
                        <h4>Recent News</h4>
                        <div class="blog__sidebar__recent">
                            @foreach ($new_product as $tm )
                            <a href="#" class="blog__sidebar__recent__item">
                                <div class="blog__sidebar__recent__item__pic">
                                    <img src="upload/images/Chamsoccay/{{$tm->image}}" alt="" style="width:80px;height:80px;">
                                </div>
                                <div class="blog__sidebar__recent__item__text">
                                    <h6>{{$tm->title}}</h6>
                                    <span>{{$tm->updated_at}}</span>
                                </div>
                            </a>
                            @endforeach
                           
                           
                        </div>
                    </div>
                   
                </div>
            </div>
          
         
            <div class="col-lg-8 col-md-7">
                <div class="row">
                    @foreach ($introduce as $value )
                        <div class="blog__item">
                            <div>
                                <img  style="width: 40%;height: 50%;margin-left: 30%;border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%;" src="upload/images/aboutus/{{$value->image}}" alt="">
                            </div>
                            <div class="blog__item__text">
                                <ul>
                                    <li><i class="fa fa-calendar-o"> {{$value->updated_at}}</i></li>
                                </ul>
                                <h5 style="text-align: center"><a href="#">{{$value->Ten}}</a></h5>
                                <p>{{$value->noidung}} </p>
                             
                            </div>
                        
                    </div>
                    @endforeach
                   
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
       
  