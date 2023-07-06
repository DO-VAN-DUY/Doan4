@extends("layout")
@section('content')
@include("hozizontal")
@include("slide");
<section class="checkout spad">
                  <div class="container">
                      <div class="checkout__form">
                          <h4>Billing Details</h4>
                          <form action="{{route('subcheck')}}">
                              <div class="row">
                                  <div class="col-lg-8 col-md-6">
                                      <div class="row">
                                          <div class="col-lg-6">
                                              <div class="checkout__input">
                                                  <p>Fist Name<span>*</span></p>
                                                  <input type="text" name="Fist_Name" required>
                                              </div>
                                          </div>
                                          <div class="col-lg-6">
                                              <div class="checkout__input">
                                                  <p>Last Name<span>*</span></p>
                                                  <input type="text" name="Last_Name" required>
                                              </div>
                                          </div>
                                      </div>
                                     
                                      <div class="checkout__input">
                                          <p>Address<span>*</span></p>
                                          <input type="text" placeholder="Street Address" class="checkout__input__add" name="diachi" required>
                                          
                                      </div>
                                     
                                      <div class="row">
                                          <div class="col-lg-6">
                                              <div class="checkout__input">
                                                  <p>Phone<span>*</span></p>
                                                  <input type="text" name="dienthoai" required>
                                              </div>
                                          </div>
                                          <div class="col-lg-6">
                                              <div class="checkout__input">
                                                  <p>Email<span>*</span></p>
                                                  <input type="text" name="Email" required>
                                              </div>
                                          </div>
                                      </div>
                                      
                                  </div>
                                  <div class="col-lg-4 col-md-6">
                                      <div class="checkout__order">
                                          <h4>Your Order</h4>
                                          <div class="checkout__order__products">Products <span>Total</span></div>
                                          <ul>
                                              
                                              @foreach ($cart->items as $item)
                                              <li>{{$item['quantity']}}-{{$item['Tensp']}}<span>{{number_format($item['giaban']*$item['quantity'])}}</span></li>
                                              @endforeach
                                          </ul>
                                          <div class="checkout__order__subtotal">Subtotal <span>{{number_format($cart->total_price)}} đ</span></div>
                                          <div class="checkout__order__total">Total <span>{{number_format($cart->total_price)}} đ</span></div>
                                         
                                          <div class="checkout__input__checkbox">
                                              <label for="payment">
                                                  Check Payment
                                                  <input type="checkbox" id="payment">
                                                  <span class="checkmark"></span>
                                              </label>
                                          </div>
                                          <div class="checkout__input__checkbox">
                                              <label for="paypal">
                                                  Paypal
                                                  <input type="checkbox" id="paypal">
                                                  <span class="checkmark"></span>
                                              </label>
                                          </div>
                                          <button type="submit" class="site-btn">PLACE ORDER</button>
                                      </div>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
              </section>
              @endsection