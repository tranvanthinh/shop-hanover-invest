{{-- @if(!empty($products->items()))
<div class="album py-5 bg-light mt-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
            @foreach($products->items() as $product)
            <div class="col">
                <div class="card product-item">
                    <a href="{{ route('product.show', ['id' => $product->id]) }}" title="{{ $product->name }}"class="link-product-img">
                        <img src="{{ asset($product->image) }}"  class="img-thumbnail product-img" />
                    </a>
                    <div class="card-body">
                        <h3><a href="{{ route('product.show', ['id' => $product->id]) }}" title="{{ $product->name }}">{{ $product->name }}</a></h3>
                        <p>${{ number_format($product->price, 2) }}</p>
                    </div>
                    <div class="btn-cart">
                        <button type="button" class="btn btn-primary btn-sm d-block w-100 mb-2 mt-2 btn-add-to-cart"
                            data-id="{{ $product->id }}"
                            data-name="{{ $product->name }}"
                            data-price="{{ $product->price }}"
                            data-img="{{ $product->image }}">
                            <i class="bi bi-cart3"></i> Thêm Vào Giỏ
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="mt-5">
            {{ $products->links('vendor.pagination.custom') }}
        </div>
    </div>
</div>
@endif --}}

@if(!empty($products->items()))
<section class="product-shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 order-1 order-lg-2">
                <div class="product-list">
                    <div class="row" id="search-suggest">
                        @foreach($products->items() as $product)
                        <div class="col-lg-3 col-sm-6">
                            <div class="product-item">
                                <div class="pi-pic">
                                    <a href="{{ route('product.show', ['id' => $product->id]) }}" title="{{ $product->name }}" class="link-product-img">
                                        <img src="{{ asset($product->image) }}" alt="">
                                    </a>
                                    <div class="sale pp-sale">Sale</div>
                                    <div class="icon">
                                        <i class="icon_heart_alt"></i>
                                    </div>

                                    <ul>
                                        <li>
                                            <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                            <li class="quick-view">
                                                <a class="btn btn-add-to-cart"
                                                    data-id="{{ $product->id }}"
                                                    data-name="{{ $product->name }}"
                                                    data-price="{{ $product->price }}"
                                                    data-img="{{ $product->image }}">
                                                    <i class="bi bi-cart3"></i> {{ __('Add To Cart') }}
                                                </a>
                                            </li>
                                        </li>
                                    </ul> 
                                </div>
                                <div class="pi-text">
                                    <div class="catagory-name">Towel</div>
                                    <a href="#">
                                        <h5 style="font-size: 1.1rem;"><a href="{{ route('product.show', ['id' => $product->id]) }}" title="{{ $product->name }}">{{ $product->name }}</a></h5>
                                    </a>
                                    <div class="product-price">
                                        ${{ number_format($product->price, 2) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="mt-5">
                        {{ $products->links('vendor.pagination.custom') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif