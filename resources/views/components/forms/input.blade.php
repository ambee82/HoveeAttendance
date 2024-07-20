<div class="form-group">
    <label class="form-label">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" value="{{ old($name) }}" class="form-control"
        placeholder="{{ $placeholder }}" required="" autocomplete="off">
    @error($name)
        <div class="text-danger mt-3">{{ $errors->first($name) }}</div>
    @enderror
</div>
