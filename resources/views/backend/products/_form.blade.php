@csrf
<div class="mb-3">
    <label class="form-label required">{{__('Brand')}}</label>
    <select class="form-select" name="brand_id">
        <option value=""></option>
        @foreach($brands as $brand)
            @php $selected = $brand->id == (old('brand_id') ?? $product->brand_id ?? null) ? 'selected' : ''; @endphp
            <option value="{{ $brand->id }}" {{ $selected }}>{{ $brand->name }}</option>
        @endforeach
    </select>
    @error('brand_id')
    <div class="invalid-feedback">{{ $errors->first('brand_id') }}</div>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label required">{{__('Product\'s Name')}}</label>
    <input type="text" class="form-control" name="name" value="{{ old('name') ?? $product->name ?? null }}">
    @error('name')
        <div class="invalid-feedback">{{ $errors->first('name') }}</div>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label required">{{__('Price')}}</label>
    <div class="input-group">
        <span class="input-group-text">$</span>
        <input type="number" class="form-control" name="price" value="{{ old('price') ?? $product->price ?? null }}" />
    </div>
    @error('price')
        <div class="invalid-feedback">{{ $errors->first('price') }}</div>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Product Description')}}</label>
    <textarea class="form-control" rows="5" name="description">{{ old('description') ?? $product->description ?? null }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Featured Image')}}</label>
    <input class="form-control" type="file" name="image" />
    @error('image')
    <div class="invalid-feedback">{{ $errors->first('image') }}</div>
    @enderror
    @if (!empty($product->image))
        <img src="{{ asset($product->image) }}" width="200" class="mt-3" />
        <a href="{{ route('backend.product.media', ['productId' => $product->id]) }}">{{ __('See More')}}</a>
    @endif
</div>

<div class="mb-3" >
    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
    <button type="reset" class="btn btn-danger">{{ __('Reset') }}</button>
    <a href="{{ route('backend.product.index') }}" class="btn btn-info">{{ __('Back') }}</a>
</div>
