<div class="form-group">
    <label class="form-label">{{ $label }}</label>
    <textarea name="{{ $name }}" class="form-control py-5" rows="{{ $rows }}" cols=""
        placeholder="{{ $placeholder }}">{{ $value }}</textarea>

    @error($name)
        <div class="text-danger mt-3">{{ $errors->first($name) }}</div>
    @enderror
</div>
