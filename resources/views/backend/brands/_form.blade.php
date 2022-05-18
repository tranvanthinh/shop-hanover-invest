@csrf

<div class="mb-3">
    <label class="form-label required">{{__('Brand Name')}}</label>
    <input type="text" class="form-control" name="name" value="{{ old('name') ?? $brand->name ?? null }}">
    @error('name')
    <div class="invalid-feedback">{{ $errors->first('name') }}</div>
    @enderror
</div>

<div class="mb-3" >
    <button type="submit" class="btn btn-primary">{{ __('Save')}}</button>
    <button type="reset" class="btn btn-danger">{{ __('Reset')}}</button>
    <a href="{{ route('backend.brand.index') }}" class="btn btn-info">{{__('Back')}}</a>
</div>
