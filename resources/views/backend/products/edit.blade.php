@extends('layouts.backend.master')

@section('content')
    <div class="admin-toolbar">
        <h3>{{__('Update Product')}}</h3>
    </div>
    <div class="table-responsive mt-5">
        <form action="{{ route('backend.product.update', ['product' => $product->id]) }}" method="post" style="max-width: 650px;" enctype="multipart/form-data">
            @method('put')
            @include('backend.products._form')
        </form>
    </div>
@endsection
