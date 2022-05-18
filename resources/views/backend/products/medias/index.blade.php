@extends('layouts.backend.master')

@section('content')
    <div class="admin-toolbar">
        <h3>Product name:
            <small class="product-name">
                <a title="View detail" href="{{ route('backend.product.edit', ['product' => $product->id]) }}">{{ $product->name }} (ID: {{ $product->id }})</a>
            </small>
        </h3>
    </div>

    <div class="table-responsive mt-5">
        <h5>Thumbnail management</h5>
        <form action="{{ route('backend.assign.media', ['productId' => $product->id]) }}" method="post" style="max-width: 650px;" enctype="multipart/form-data" class="mt-3">
            @csrf
            <div class="mb-3 d-flex">
                <input class="form-control" type="file" name="image" />&nbsp;
                <button type="submit" class="btn btn-primary">Upload</button>&nbsp;
                <a href="{{ route('backend.product.index') }}" class="btn btn-info">Back</a>
            </div>
            @error('image')
            <div class="invalid-feedback">{{ $errors->first('image') }}</div>
            @enderror
            @include('partitions.flash_message')
        </form>
        <br/>
        <table class="table table-bordered table-sm">
            <thead>
            <tr>
                <th class="text-center">#</th>
                <th>Feature image</th>
                <th>Uploaded at</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($product->thumbs as $media)
                <tr>
                    <td class="text-center" valign="middle" width="90">{{ $media->id }}</td>
                    <td valign="middle"><img src="{{ asset($media->name) }}" width="90" /></td>
                    <td class="text-center" valign="middle" width="180">{{ $media->created_at }}</td>
                    <td valign="middle" class="action" width="90">
                        @include('partitions.button_delete', ['route' => route('backend.media.destroy', ['medium' => $media->id])])
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
