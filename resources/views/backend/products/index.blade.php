@extends('layouts.backend.master')

@section('content')
    <div class="admin-toolbar">
        <h3>{{ __('List Of Products')}}</h3>
        <a href="{{ route('backend.product.create') }}" class="btn btn-primary"><img src="{{asset('img/addnew.png')}}" alt="">{{ __(' Add new')}}</a>
    </div>

    @include('partitions.flash_message')

    <div class="table-responsive">
        <table class="table table-bordered table-sm">
            <thead>
            <tr>
                <th class="text-center" style="text-align: center;">#</th>
                <th style="text-align: center;">{{ __('Image')}}</th>
                <th style="text-align: center;">{{ __('Product\'s name')}}</th>
                <th style="text-align: center;">{{ __('Price')}}</th>
                <th style="text-align: center;">{{ __('Brand') }}</th>
                <th style="text-align: center;">{{ __('Action')}}</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products->items() as $product)
            <tr>
                <td class="text-center" style="text-align: center;" valign="middle">{{ $product->id }}</td>
                <td width="120" style="text-align: center;" class="text-center" valign="middle"><img src="{{ $product->image }}" width="80" /></td>
                <td valign="middle">{{ $product->name }}</td>
                <td align="right" style="text-align: center;" valign="middle" width="120">{{ $product->priceUsdFormat }}</td>
                <td valign="middle" style="text-align: center;">{{ $product->brand->name ?? null }}</td>
                <td valign="middle" style="text-align: center;" class="action">
                    <a href="{{ route('backend.product.media', ['productId' => $product->id]) }}" class="btn btn-outline-primary btn-sm"><img src="{{asset('img/add.png')}}" alt=""></a>
                    <a href="{{ route('backend.product.edit', ['product' => $product->id]) }}" class="btn btn-outline-secondary btn-sm"><img src="{{asset('img/edit.png')}}" alt=""></a>
                    @include('partitions.button_delete', ['route' => route('backend.product.destroy', ['product' => $product->id])])
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-1">
        {{ $products->links('vendor.pagination.custom') }}
    </div>
@endsection
