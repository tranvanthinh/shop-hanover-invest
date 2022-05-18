<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('page_title', env('APP_NAME'))</title>
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
    <div id="preloder">
        <div class="loader"></div>
    </div>

<!-- Header Section Begin -->
{{-- @include("layouts.frontend.header") --}}
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
                                        <a href="{{route('auth.personalpage')}}">{{ __('Personal page')}}</a>
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
                        <form action="/search" method="post" class="input-group" id="header-search">
                            {{ csrf_field() }}
                            <input type="text" name="search" class="m-input" placeholder="{{__('What do you need?')}}">
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
                    <span>{{ __('ALL CATEGORY') }}</span>
                    <ul class="depart-hover">
                        <li class="active"><a href="{{URL("/")}}">Club Shirt</a></li>
                        <li><a href="#">National Team</a></li>
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

<!-- Header End -->

<!-- Sleder -->
{{-- @include("layouts.frontend.slide") --}}
<!-- Sleder End -->

<main>
    @yield('content')
</main>

<!-- Footer -->
{{-- @include("layouts.frontend.footer") --}}
<div class="partner-logo">
    <div class="container">
        <div class="logo-carousel owl-carousel">
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="{{ asset('assets/img/logo-carousel/logo-1.png')}}" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="{{ asset('assets/img/logo-carousel/logo-2.png')}}" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="{{ asset('assets/img/logo-carousel/logo-3.png')}}" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="{{ asset('assets/img/logo-carousel/logo-4.png')}}" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="{{ asset('assets/img/logo-carousel/logo-5.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Partner Logo Section End -->
<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer-left">
                    <div class="footer-logo">
                        <a href="#"><img src="{{ asset('assets/img/footer-logo.png')}}" alt=""></a>
                    </div>
                    <ul>
                        <li>Address: 418 Pham Van Dong Ha Noi</li>
                        <li>Phone: +8 83.510.1510</li>
                        <li>Email: thinhdienluc2000@gmail.com</li>
                    </ul>
                    <div class="footer-social">
                        <a href="https://www.facebook.com/xuanloc.23082000"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 offset-lg-1">
                <div class="footer-widget">
                    <h5>Information</h5>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Checkout</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Serivius</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="footer-widget">
                    <h5>My Account</h5>
                    <ul>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Shopping Cart</a></li>
                        <li><a href="#">Shop</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="newslatter-item">
                    <h5>Join Our Newsletter Now</h5>
                    <p>Get E-mail updates about our latest shop and special offers.</p>
                    <form action="#" class="subscribe-form">
                        <input type="text" placeholder="Enter Your Mail">
                        <button type="button">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-reserved">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-text">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://www.facebook.com/xuanloc.23082000" target="_blank">Tran Van Thinh</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                    <div class="payment-pic">
                        <img src="{{ asset('assets/img/payment-method.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

<a href="#" title="Go to admin system" class="admin-panel-link">
    <img src="{{asset('img/up-arrow.png')}}" alt="">
</a>

<script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('./js/cart.js') }}"></script>
<script src="{{ asset('./js/frontend.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" 
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" 
    crossorigin="anonymous" referrerpolicy="no-referrer">
</script>
<script>
    $('#header-search').on('keyup', function() {
        var search = $(this).serialize();
        if ($(this).find('.m-input').val() == '') {
            $('#search-suggest div').hide();
        } else {
            $.ajax({
                url: '/search',
                type: 'POST',
                data: search,
            })
            .done(function(res) {
                $('#search-suggest').html('');
                $('#search-suggest').append(res)
            })
        };
    });
 </script>
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
