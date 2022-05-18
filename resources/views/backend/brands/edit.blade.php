@extends('layouts.backend.master')

@section('content')
    <div class="admin-toolbar">
        <h3>{{ __('Update Brand') }}</h3>
    </div>
    <div class="table-responsive mt-5">
        <form action="{{ route('backend.brand.update', ['brand' => $brand->id]) }}" method="post" style="max-width: 650px;" enctype="multipart/form-data">
            @method('put')
            @include('backend.brands._form')
        </form>
    </div>
@endsection
