@extends("layout")
@section('content')
@include("hozizontal")
@include("slide");
                <section class="shoping-cart spad">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-12">
                              <div class="shoping__cart__table">
                                  <table>
                                      <thead>
                                          <tr>  
                                              
                                              <th class="shoping__product">Products</th>
                                              <th>Price</th>
                                              <th>Quantity</th>
                                              <th>Total</th>
                                              <th></th>
                                          </tr>
                                      </thead>
                                     
                                      <tbody>
                                           @foreach ($cart->items as $item) 
                                          <tr>
                                            
                                         
                                            <td class="shoping__cart__item">
                                                <img src="upload/images/{{$item['Anh']}}" alt="" style="width:70px; height:70px;">
                                                <h5>{{$item['Tensp']}}</h5>
                                            </td>
                                            <td class="shoping__cart__price">
                                                {{number_format($item['giaban'])}}đ
                                            </td>
                                            <td class="shoping__cart__quantity">
                                                <div class="quantity" style="font-size: 13px">
                                                  
                                                        
                                                        <form action="{{route('cart.update',['id' =>$item['id']])}}" method="get" accept-charset="utf-8">
                                                            <input type="number" name="quantity" id="" value="{{$item['quantity']}}" min="1" style="width:60%">
                                                            <input type="submit" value="Update" style="padding:7px" >
                                                        </form>
                                                   
                                                </div>
                                            </td>
                                            <td class="shoping__cart__total">
                                               {{number_format($item['giaban']*$item['quantity'])}}
                                            </td>
                                            <td >
                                                <a href="{{route('cart.remove',['id'=>$item['id']])}}" class="btn btn-xs btn-danger">Remove</a>
                                            </td>
                                        </tr>
                                          @endforeach 
                                         
                                         
                                      </tbody>
                                    

                                  </table>
                                  
                                  <a href="{{route('cart.clear')}}" class="btn btn-xs btn-danger" style="float:right;padding:10px">Clear all</a>
                                  <a href="/" class="btn btn-xs btn-danger" style="color: #fff;padding:10px">Continue shopping</a>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          
                          <div class="col-lg-6">
                              <div class="shoping__checkout">
                                  <h5>Cart Total</h5>
                                  <ul>
                                      <li>Subtotal <span>{{number_format($cart->total_price)}} đ</span></li>
                                      <li>Total <span>{{number_format($cart->total_price)}} đ</span></li>
                                  </ul>
                                  <a href="{{route('check')}}" class="primary-btn">PROCEED TO CHECKOUT</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              @endsection