@extends('layouts.frontend.master') 
<!-- Header Section Begin -->
{{-- @include("layouts.frontend.header") --}}
<!-- Header End -->

@section('page_title', $product->name)

@push('navbar')
    @include('partitions.navbar', ['product' => $product])
@endpush

@section('content')
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row product-detail">
                <div class="col product-img-detail" style="display: flex; align-items: center; justify-content: center; padding: 5px 0;">
                    <div class="card product-item">
                        <a href="#" title="" class="link-product-img">
                            <img src="{{ $product->image }}"  class="product-img" id="product-main-image" alt="{{ $product->name }}"/>
                        </a>
                        @if ($product->thumbs->count() > 0)
                        <div class="card-body">
                            <ul class="thumbs-item">
                                @foreach($product->thumbs as $image)
                                <li><img src="{{ $image->name }}" alt="{{ $product->name }}" /></li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col product-info">
                    <div class="card product-item">
                        <div class="card-body">
                            <h3><a href="#" title="{{ $product->name }}">{{ $product->name }}</a></h3>
                            <div class="product-info-brand mt-4">
                                <div><strong>{{__('Brand')}}:</strong> <small style="font-weight: 700; font-size: 1.5rem" >{{ $product->brand->name }}</small></div>
                                <div><p><small>${{ number_format($product->price, 2) }}</small></p></div>
                            </div>
                            <div class="btn-cart-amount">
                                <span class="amount-label">{{ __('Amount')}}</span>
                                <span class="btn-minus-amount">-</span>
                                <input type="number" readonly="true" id="product-amount" value="1" />
                                <span class="btn-plus-amount">+</span>
                                <button type="button" class="btn btn-primary btn-add-to-cart"
                                    data-id="{{ $product->id }}"
                                    data-name="{{ $product->name }}"
                                    data-price="{{ $product->price }}"
                                    data-img="{{ $product->image }}">
                                    <i class="bi bi-cart3"></i> {{ __('Add To Cart')}}
                                </button>
                            </div>
                            <div class="nav nav-tabs mt-5" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-description-tab" data-bs-toggle="tab" data-bs-target="#nav-description" type="button" role="tab" aria-controls="nav-description" aria-selected="true">{{ __('Product Description') }}</button>
                                <button class="nav-link" id="nav-delivery-tab" data-bs-toggle="tab" data-bs-target="#nav-delivery" type="button" role="tab" aria-controls="nav-delivery" aria-selected="false">{{__('Transport')}}</button>
                                <button class="nav-link" id="nav-paymen-tab" data-bs-toggle="tab" data-bs-target="#nav-paymen" type="button" role="tab" aria-controls="nav-paymen" aria-selected="false">{{__('Payments')}}</button>
                            </div>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-description" role="tabpanel" aria-labelledby="nav-description-tab">{{ $product->description }}</div>
                                <div class="tab-pane fade" id="nav-delivery" role="tabpanel" aria-labelledby="nav-delivery-tab">Giao Hàng Trong Vòng 2 Giờ Tới</div>
                                <div class="tab-pane fade" id="nav-paymen" role="tabpanel" aria-labelledby="nav-paymen-tab">
                                    <img src="{{ asset('img/payment.png') }}" alt="paymen" class="paymen-img"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


<!-- Footer -->
{{-- @include("layouts.frontend.footer") --}}
<!-- Footer End -->