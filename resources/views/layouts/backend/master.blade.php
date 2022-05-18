<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop Invest System</title>
    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/backend.css') }}" />
</head>
<body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="{{URL("/")}}">{{__('Sports Shopping System')}}</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="navbar-nav px-3" style="flex-direction: row;">
        <li class="nav-item text-nowrap" style="margin-right: 30px;">
            {{-- <a class="nav-link" href="{{URL("/")}}">{{__('Go to User Interface')}}</a> --}}
        </li>
        <li class="nav-item text-nowrap">
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="nav-link btn">{{ __('Logout')}}</button>
            </form>
        </li>
    </ul>
</header>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('backend.product.*') ? 'active' : '' }}" href="{{ route('backend.product.index') }}" title="Product management">
                            <i class="bi bi-check2-circle"></i>
                            {{ __('Product Management')}}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('backend.brand.*') ? 'active' : '' }}" href="{{ route('backend.brand.index') }}" title="Brand management">
                            <i class="bi bi-check2-circle"></i>
                            {{ __('Brand Management') }}
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-3">
            @yield('content')
        </main>
    </div>
</div>
</body>
</html>
