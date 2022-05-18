<nav class="navbar navbar-light breadcrumb-product-detail-page" aria-label="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{URL('/')}}">{{__('Home')}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $product->brand->name }}</li>
            <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
        </ol>
    </div>
</nav>
