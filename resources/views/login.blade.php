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
                                    <div >
                                                      <div class="col-lg-12 col-md-12 form-container" id="form_box">
                                                                        <div class="col-lg-4 col-md-12 col-sm-4 col-xs-12 form-box text-center">
                                                                                          <div class="logo mt-5 mb-3">
                                                                                                            <img src="/upload/images/img9.jpg" width="150px" style="margin-top: -10px" >
                                                                                          </div>
                                                                                          <div class="heading mb-3">
                                                                                                            <h5 style="color: #fff;">Chào mừng bạn đến với Sambee Grader.Đăng nhập ngay nào !</h5>
                                                                                          </div>
                                                                                          <form action="" method="POST">
                                                                                                            @csrf
                                                                                                           
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
                                                                                                           
                                                                                          
                                                                                                            <div class="row mb-3">
                                                                                                                              <div class="col-6 d-flex">
                                                                                                                                                <div class="custom-control custom-checkbox">
                                                                                                                                                                  <input type="checkbox" class="custom-control-input" id="cb1">
                                                                                                                                                                  <label class="custom-control-label text-white" for="cb1">Remember me</label>
                                                                                                                                                </div>
                                                                                                                              </div>
                                                                                                                              <div class="col-6 text-right">
                                                                                                                                                <a href="forget.html" class="forget-link">Forget password</a>
                                                                                                                              </div>
                                                                                                            </div>
                                                                                                            <div class="text-left mb-3">
                                                                                                                              <input type="submit" name="submit" class="btn btn-primary" value="Login">
                                                                                                            </div>
                                                                                                            <div class="text-white mb-3"><a href="/loginad" style="color: #fff;"><b>If you are an administrator, please click here</b></a></div>
                                                                                                             <div class="row mb-3">
                                                                                                                              <div class="col-4">
                                                                                                                                                <a href="" class="btn btn-block btn-social btn-facebook">
                                                                                                                                                                  <i class="fa fa-facebook"></i>
                                                                                                                                                </a>
                                                                                                                              </div>
                                                                                                                              <div class="col-4">
                                                                                                                                                <a href="" class="btn btn-block btn-social btn-google">
                                                                                                                                                                  <i class="fa fa-google"></i>
                                                                                                                                                </a>
                                                                                                                              </div>
                                                                                                                              <div class="col-4">
                                                                                                                                                <a href="" class="btn btn-block btn-social btn-twitter">
                                                                                                                                                                  <i class="fa fa-twitter"></i>
                                                                                                                                                </a>
                                                                                                                              </div>
                                                                                                            </div>
                                                                                                            <div class="text-white">Don't have an account?
                                                                                                                              <a href="/registerkh" class="register-link">Register here</a>
                                                                                                            </div>
                                                                                                            <div>
                                                                                                                              <a href="/" class="register-link">Back to main page</a>   
                                                                                                            </div>
                                                                                          </form>
                                                                        </div>
                                                      </div>
                  
                                                      {{-- <div class="col-lg-6 col-md-6 d-none d-md-block image-container"></div> --}}
                                    </div>
                  </div>
                  
</div>