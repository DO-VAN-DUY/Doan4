@extends("layout_login")
<style>
                  #form_box
                  {
                                  
                                    /* background-image:url("/upload/images/nenlogin2.jpeg"); */
                                    background-image:url("/upload/images/nenlogin.webp");
                  }
                  .container-fluid
                  {
                                   
                                    font-size: 13px;
                  }
</style>

<div class="container-fluid">
                  <div>
                                    <div class="col-lg-12 col-md-12 form-container" id="form_box">
                                                      <div class="col-lg-4 col-md-12 col-sm-4 col-xs-12 form-box text-center">
                                                                        <div class="logo mt-5 mb-3">
                                                                                          <img src="/upload/images/img9.jpg" width="150px">
                                                                        </div>
                                                                        <div class="heading mb-3">
                                                                                          <h4>Register an account</h4>
                                                                        </div>
                                                                        <form action="" method="POST">
                                                                                          @csrf
                                                                                         
                                                                                          <div class="form-input">
                                                                                                            <span><i class="fa fa-envelope"></i></span>
                                                                                                            <input type="full_name" placeholder="full_name" name="full_name" >
                                                                                          </div>
                                                                                          @if($errors->has('full_name'))
                                                                                          <strong class="text-dange" style="color: #fff">{{$errors->first('full_name')}}</strong>
                                                                                          @endif
                                                                                          <div class="form-input">
                                                                                                            <span><i class="fa fa-envelope"></i></span>
                                                                                                            <input type="address" placeholder="address" name="address" >
                                                                                          </div>
                                                                                          @if($errors->has('address'))
                                                                                          <strong class="text-dange" style="color: #fff">{{$errors->first('address')}}</strong>
                                                                                          @endif
                                                                                          <div class="form-input">
                                                                                                            <span><i class="fa fa-envelope"></i></span>
                                                                                                            <input type="email" placeholder="email" name="email" >
                                                                                          </div>
                                                                                          @if($errors->has('email'))
                                                                        
                                                                                          <strong class="text-dange" style="color: #fff">{{$errors->first('email')}}</strong>
                                                                                          @endif
                                                                                          <div class="form-input" >
                                                                                                            <span><i class="fa fa-lock"></i></span>
                                                                                                            <input type="password" placeholder="password" name="password" >
                                                                                          </div>
                                                                                          @if($errors->has('password'))
                                                                                          <strong class="text-dange" style="color: #fff">{{$errors->first('password')}}</strong>
                                                                                          @endif
                                                                                          <div class="form-input" >
                                                                                                            <span><i class="fa fa-lock"></i></span>
                                                                                                            <input type="file" placeholder="image" name="image" >
                                                                                          </div>
                                                                                          <div class="form-input">
                                                                                                                             
                                                                                                            <select style="width:100%;height:30px" >
                                                                                                                              <option value="" >Nhanvien</option>                       
                                                                                                            </select>             
                                                                                          </div>
                                                                                         
                                                                                          
                                                                                          <div class="row mb-3">
                                                                                                            <div class="col-6 d-flex">
                                                                                                                              <div class="custom-control custom-checkbox">
                                                                                                                                                <input type="checkbox" class="custom-control-input" id="cb1">
                                                                                                                                                <label class="custom-control-label text-white" for="cb1">Remember me</label>
                                                                                                                              </div>
                                                                                                            </div>
                                                                                                            
                                                                                          </div>
                                                                                          <div class="text-left mb-3">
                                                                                                            <input type="submit" name="submit" class="btn btn-primary" value="Register">
                                                                                          </div>
                                                                                          
                                                                                         
                                                                        </form>
                                                      </div>
                                    </div>

                                    {{-- <div class="col-lg-6 col-md-6 d-none d-md-block image-container"></div> --}}
                  </div>
</div>
                  
</div>