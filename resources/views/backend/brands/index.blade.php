@extends('layouts.backend.master')

@section('content')
    <div class="admin-toolbar">
        <h3>{{ __('List Of Brand')}}</h3>
        <a href="{{ route('backend.brand.create') }}" class="btn btn-primary"><img src="{{asset('img/addnew.png')}}" alt="">{{ __(' Add new')}}</a>
    </div>

    @include('partitions.flash_message')

    @error('product_exists') <div class="alert alert-warning" role="alert">{{ $errors->first('product_exists') }}</div> @enderror

    <div class="table-responsive">
        <table class="table table-bordered table-sm">
            <thead>
            <tr>
                <th class="text-center">#</th>
                <th style="text-align: center;">{{ __('Brand Name')}}</th>
                <th style="text-align: center;">{{ __('Total') }}</th>
                <th style="text-align: center;">{{ __('Time') }}</th>
                <th style="text-align: center;">{{ __('Action')}}</th>
            </tr>
            </thead>
            <tbody>
            @foreach($brands->items() as $brand)
                <tr>
                    <td class="text-center" valign="middle">{{ $brand->id }}</td>
                    <td valign="middle">{{ $brand->name }}</td>
                    <td valign="middle" align="center" width="120">{{ $brand->products_count }}</td>
                    <td valign="middle">{{ $brand->created_at }}</td>
                    <td valign="middle" class="action">
                        <a href="{{ route('backend.brand.edit', ['brand' => $brand->id]) }}" class="btn btn-outline-secondary btn-sm"><img src="{{asset('img/edit.png')}}" alt=""></a>
                        @include('partitions.button_delete', ['route' => route('backend.brand.destroy', ['brand' => $brand->id])])
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-1">
        {{ $brands->links('vendor.pagination.custom') }}
    </div>
@endsection
