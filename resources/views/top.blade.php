<div class="header__top">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="header__top__left">
                    <ul>
                        <li><i class="ti-headphone-alt"></i> +0333823775</li>
                        <li><i class="ti-email"></i> duydo1118@gmail.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-md-6">
                <div class="header__top__right">
                    <div class="header__top__right__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                    </div>
                    {{-- <div class="header__top__right__language">
                        <img src="img/language.png" alt="">
                        <div>English</div>
                        <span class="arrow_carrot-down"></span>
                        <ul>
                            <li><a href="#">Spanis</a></li>
                            <li><a href="#">English</a></li>
                        </ul>
                    </div> --}}
                    <div class="header__top__right__auth">
                        @if(Auth::guard('cus')->check())
                        <a href="{{route('logout')}}"><i class="fa fa-user"></i>Logout</a>
                        <a href="#"></i> Tài khoản:{{Auth::guard('cus')->user()->Tenkh}}</a>
                        @else
                        <a href="/login"><i class="fa fa-user"></i>Login</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>