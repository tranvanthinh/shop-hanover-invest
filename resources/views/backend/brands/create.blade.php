@extends('layouts.backend.master')

@section('content')
    <div class="admin-toolbar">
        <h3>{{ __('Add New Brand')}}</h3>
    </div>
    <div class="table-responsive mt-5">
        <form action="{{ route('backend.brand.store') }}" method="post" style="max-width: 650px;" enctype="multipart/form-data">
            @include('backend.brands._form')
        </form>
    </div>
@endsection
