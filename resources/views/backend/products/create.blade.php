@extends('layouts.backend.master')

@section('content')
    <div class="admin-toolbar">
        <h3>{{ __('Create New Product') }}</h3>
    </div>
    <div class="table-responsive mt-5">
        <form action="{{ route('backend.product.store') }}" method="post" style="max-width: 650px;" enctype="multipart/form-data">
            @include('backend.products._form')
        </form>
    </div>
@endsection


