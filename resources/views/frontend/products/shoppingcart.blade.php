<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản lý giỏ hàng</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('assets/css/headerfooter.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" type="text/css">
</head>

<body>
<!-- Header Section Begin -->
{{-- @include("layouts.frontend.header") --}}
<!-- Header End -->

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>


    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="{{URL("/")}}"><i class="fa fa-home"></i>{{__('Home')}}</a>
                        <a href="#">{{ __('Shop')}}</a>
                        <span>{{ __('Shopping Cart')}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>{{ __('Image') }}</th>
                                    <th class="p-name">{{ __('Product Name') }}</th>
                                    <th>{{ __('Price')}}</th>
                                    <th>{{ __('Quantity') }}</th>
                                    <th>{{ __('Total Money')}}</th>
                                    <th>{{__('Save') }}</th>
                                    <th>{{__('Delete') }}</th>
                                </tr>
                            </thead>
                            <tbody id="product-in-shoppingcart">
                                {{-- <tr>
                                    <td class="cart-pic first-row"><img src="{{asset('assets/img/cart-page/product-1.jpg')}}" alt=""></td>
                                    <td class="cart-title first-row">
                                        <h5>Pure Pineapple</h5>
                                    </td>
                                    <td class="p-price first-row">$0.00</td>
                                    <td class="qua-col first-row">
                                        <span class="total-count">0</span>
                                    </td>
                                    <td class="total-price first-row">$60.00</td>
                                    <td class="close-td first-row"><i class="ti-save "></i></td>
                                    <td class="close-td first-row"><i class="ti-close"></i></td>
                                </tr> --}}
                            </tbody>
                        </table>
                    </div>
                    <div class="row ">
                        <div class="col-lg-4 offset-lg-8 ">
                            <div class="proceed-checkout ">
                                <ul>
                                    {{-- <li class="subtotal ">Subtotal <span>$240.00</span></li> --}}
                                    <li class="cart-total " id="cart-total-amount">Total<span>$0.00</span></li>
                                </ul>
                                <a href="#" class="proceed-btn ">PROCEED TO CHECK OUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->	

<!-- Footer -->
{{-- @include("layouts.frontend.footer") --}}
<!-- Footer End -->

    <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('./js/cart.js') }}"></script>
    <script src="{{ asset('./js/frontend.js') }}"></script>
    <!-- Js Plugins -->
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.zoom.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.dd.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.slicknav.js')}}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('assets/js/main.js')}}"></script>
</body>

</html>