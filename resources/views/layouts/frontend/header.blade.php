<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>>@yield('page_title', env('APP_NAME'))</title>
    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/headerfooter.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/slicknav.min.css')}}" type="text/css">
</head>
<body>
    <header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="ht-left">
                <div class="mail-service">
                    <i class=" fa fa-envelope"></i>
                    thinhdienluc2000@gmail.com
                </div>
                <div class="phone-service">
                    <i class=" fa fa-phone"></i>
                    +8 83.510.1510
                </div>
            </div>
            <div class="ht-right">
                {{-- <a href="{{route('auth.form')}}" class="login-panel"><i class="fa fa-user"></i>
                    {{ __('Tài khoản') }}: {{Auth::user()->name}}
                </a> --}}

                <div class="login-panel lan-selector">
                    <ul class="header__navbar-list">
                        <li class="header__navbar-item header__navbar-user">
                            <i class="fa fa-user"></i>
                            {{-- <img src="{{asset('img/user.png')}}" alt=""> --}}
                            @if(Auth::Check())
                                <span class="header__navbar-user-name">{{Auth::user()->name}}</span>
                            @else
                                <span class="header__navbar-user-name">{{__('Account')}}</span>
                                <img src="{{asset('img/down-arrow.png')}}" alt="">
                            @endif
                            <ul class="header__navbar-user-menu">
                                @if(Auth::Check())
                                    <li class="header__navbar-user-item">
                                        <a href="#">{{ __('Personal page')}}</a>
                                    </li>
                                    <li class="header__navbar-user-item">
                                        <a href="{{route('cart-details.cart')}}">{{ __('Shopping')}}</a>
                                    </li>
                                    <li class="header__navbar-user-item">
                                        <a href="#">{{ __('Setting')}}</a>
                                    </li>
                                    <li class="header__navbar-user-item header__navbar-user-item-separate">
                                        <a href="{{route('auth.logout')}}">{{ __('Logout')}}</a>
                                    </li>
                                @else
                                    <li class="header__navbar-user-item">
                                        <a href="{{route('auth.formlogin')}}">{{ __('Login')}}</a>
                                    </li>
                                    <li class="header__navbar-user-item">
                                        <a href="{{route('auth.formregister')}}">{{ __('Register')}}</a>
                                    </li>
                                    <li class="header__navbar-user-item">
                                        <a href="{{ route('login') }}">{{ __('Admin')}}</a>
                                    </li>
                                @endif
                            </ul>
                        </li>
                    </ul>
                </div>
                
                {{-- <div class="login-panel lan-selector">
                    <ul class="header__navbar-list">
                        <li class="header__navbar-item header__navbar-user">
                            <i class="fa fa-user"></i>
                            @if(Auth::Check())
                                <span class="header__navbar-user-name">{{Auth::user()->name}}</span>
                            @else
                                <span class="header__navbar-user-name">{{__('Tài khoản')}}</span>
                            @endif
                            <ul class="header__navbar-user-menu">
                                @if(Auth::Check())
                                    <li class="header__navbar-user-item">
                                        <a href="#">{{ __('Tài khoản của bạn')}}</a>
                                    </li>
                                    <li class="header__navbar-user-item">
                                        <a href="#">{{ __('Địa chỉ của bạn')}}</a>
                                    </li>
                                    <li class="header__navbar-user-item">
                                        <a href="{{route('cart-details.cart')}}">{{ __('Đơn mua')}}</a>
                                    </li>
                                    <li class="header__navbar-user-item header__navbar-user-item-separate">
                                        <a href="{{route('auth.logout')}}">{{ __('Đăng xuất')}}</a>
                                    </li>
                                @else
                                    <li class="header__navbar-user-item">
                                        <a href="{{route('auth.formlogin')}}">{{ __('Đăng nhập')}}</a>
                                    </li>
                                    <li class="header__navbar-user-item">
                                        <a href="{{route('auth.formregister')}}">{{ __('Đăng kí')}}</a>
                                    </li>
                                    <li class="header__navbar-user-item">
                                        <a href="{{ route('login') }}">{{ __('Admin')}}</a>
                                    </li>
                                @endif
                            </ul>
                        </li>
                    </ul>
                </div> --}}
                {{-- <a href="{{ route('user.change-language', ['en'])}}">English</a>
                <a href="{{ route('user.change-language', ['vi'])}}">Vietnam</a> --}}
                
                <div class="lan-selector flag-top">
                    <ul class="header__navbar-list-language">
                        <li class="header__navbar-item header__navbar-user">
                            @if(Auth::Check())
                                <span class="header__navbar-user-language">
                                    <a href="{{ route('user.change-language', ['en'])}}">
                                        <img src="{{asset('assets/img/vietnam.png')}}" alt="">
                                        {{ __('Vietnamese')}}
                                        <img src="{{asset('img/down-arrow.png')}}" alt="">
                                    </a>
                            </span>   
                            @else
                                <span class="header__navbar-user-language">
                                    <a href="{{ route('user.change-language', ['en'])}}">
                                        <img src="{{asset('assets/img/english.png')}}" alt="">
                                        {{ __('English')}}
                                        <img src="{{asset('img/down-arrow.png')}}" alt="">
                                    </a>
                                </span>
                            @endif
                            <ul class="header__navbar-language">
                                @if(Auth::Check())
                                    <li class="header__navbar-user-item-language">
                                        <a href="{{ route('user.change-language', ['en'])}}">
                                            <img src="{{asset('assets/img/english.png')}}" alt="">
                                            {{ __('English')}}
                                        </a>
                                    </li>
                                    <li class="header__navbar-user-item-language">
                                        <a href="{{ route('user.change-language', ['vi'])}}">
                                            <img src="{{asset('assets/img/japan.png')}}" alt="">
                                            {{ __('Japan')}}
                                        </a>
                                    </li>
                                    <li class="header__navbar-user-item-language">
                                        <a href="{{ route('user.change-language', ['vi'])}}">
                                            <img src="{{asset('assets/img/vietnam.png')}}" alt="">                                            
                                            {{ __('Vietnamese')}}
                                        </a>
                                    </li>
                                @else
                                    <li class="header__navbar-user-item-language">
                                        <a href="{{ route('user.change-language', ['en'])}}">
                                            <img src="{{asset('assets/img/english.png')}}" alt="">
                                            {{ __('English')}}
                                        </a>
                                    </li>
                                    <li class="header__navbar-user-item-language">
                                        <a href="{{ route('user.change-language', ['vi'])}}">
                                            <img src="{{asset('assets/img/japan.png')}}" alt="">
                                            {{ __('Japan')}}
                                        </a>
                                    </li>
                                    <li class="header__navbar-user-item-language">
                                        <a href="{{ route('user.change-language', ['vi'])}}">
                                            <img src="{{asset('assets/img/vietnam.png')}}" alt="">
                                            {{ __('Vietnamese')}}
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </li>
                    </ul>
                </div>

                {{-- <div class="lan-selector flag-top">
                    <select class="language_drop" name="countries" id="countries" style="width:100px; margin-left: 15px;">
                        <option value='yt' data-image="{{asset('assets/img/flag-1.jpg')}}" data-imagecss="flag yt"
                            data-title="English">English</option>
                        <option value='yu' data-image="{{asset('assets/img/flag-2.jpg')}}" data-imagecss="flag yu"
                            data-title="Bangladesh">German </option>
                        <option value='yu' data-image="{{asset('assets/img/vietnam.png')}}" data-imagecss="flag yu"
                            data-title="Bangladesh">Vietnam</option>
                    </select>
                </div> --}}
                <div class="top-social">
                    <a href="https://www.facebook.com/xuanloc.23082000"><i class="ti-facebook" title="kết nối với facebook"></i></a>
                    <a href="#"><i class="ti-twitter-alt" title="kết nối với twitter"></i></a>
                    <a href="#"><i class="ti-linkedin" title="kết nối với linkedin"></i></a>
                    <a href="#"><i class="ti-pinterest" title="kết nối với pinterest"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="inner-header">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="logo">
                        <a href="{{URL("/")}}">
                            <img src="{{asset('assets/img/logo1.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="advanced-search">
                        {{-- <button type="button" class="category-btn">{{ __('All Categories')}}</button> --}}
                        <form action="#" class="input-group">
                            <input type="text" placeholder="{{__('What do you need?')}}">
                            <button type="button"><i class="ti-search"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 text-right col-md-3">
                    <ul class="nav-right">
                        <li class="heart-icon"><a href="#">
                                <i class="icon_heart_alt"></i>
                                <span>1</span>
                            </a>
                        </li>
                        <li class="cart-icon"><a href="#">
                                <i class="icon_bag_alt"></i>
                                <span class="navbar-tool-label total-count">0</span>
                            </a>
                            <div class="cart-hover">
                                <div class="select-items">
                                    <table >
                                        <tbody id="product-in-cart">
                                            {{-- <span style="justify-content: center; display: flex;">Giỏ hàng trống!</span> --}}
                                        </tbody>
                                    </table>
                                </div>
                                <div class="select-total">
                                    <span>{{__('Total Money')}}:</span>
                                    <h5 id="cart-total-amount">$0.00</h5>
                                </div>
                                <div class="select-button">
                                    <a href="{{route('cart-details.cart')}}" class="primary-btn view-card">{{ __('VIEW CARD')}}</a>
                                    <a href="#" class="primary-btn checkout-btn">{{ __('CHECK OUT')}}</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    {{-- <div class="navbar-toolbar d-flex flex-shrink-0 justify-content-end">
                        <div class="navbar-tool dropdown dropdown-toggle ms-3 tool-bar-cart">
                            <a class="navbar-tool-icon-box cart-total" href="{{route('cart-details.cart')}}">
                                <span class="navbar-tool-label total-count">0</span>
                                <i class="bi bi-cart3"></i>
                            </a>
                            <a class="navbar-tool-text" href="{{route('cart-details.cart')}}">
                                <small>Giỏ hàng</small>
                                <span id="cart-total-amount">$0.00</span>
                            </a>
                            <ul class="product-in-cart" id="product-in-cart">
                                <li>Giỏ hàng trống!</li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="nav-item">
        <div class="container">
            <div class="nav-depart">
                <div class="depart-btn">
                    <i class="ti-menu"></i>
                    <span>All category</span>
                    <ul class="depart-hover">
                        <li class="active"><a href="#">Women’s Clothing</a></li>
                        <li><a href="#">Men’s Clothing</a></li>
                        <li><a href="#">Underwear</a></li>
                        <li><a href="#">Kid's Clothing</a></li>
                        <li><a href="#">Brand Fashion</a></li>
                        <li><a href="#">Accessories/Shoes</a></li>
                        <li><a href="#">Luxury Brands</a></li>
                        <li><a href="#">Brand Outdoor Apparel</a></li>
                    </ul>
                </div>
            </div>
            <nav class="nav-menu mobile-menu">
                <ul>
                    <li><a href="#">{{ __('HOME')}}</a></li>
                    <li><a href="#">{{ __('SHOP')}}</a></li>
                    <li><a href="#">{{ __('COLLECTION')}}</a></li>
                    <li><a href="#">{{ __('SALE')}}</a></li>
                    <li><a href="#">{{ __('CONTACT')}}</a></li>  
                    <li><a href="#">{{ __('PAGES')}}</a></li>
                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
        </div>
    </div>
    
    @stack('navbar')
</header>

<script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('./js/cart.js') }}"></script>
<script src="{{ asset('./js/frontend.js') }}"></script>
<!-- Js Plugins -->
<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.zoom.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.dd.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.slicknav.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>

