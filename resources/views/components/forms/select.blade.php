<label class="form-label">{{ $label }}</label>
<select name="{{ $name }}" class="form-control py-5 select2 form-select bg-light">
    @foreach ($options as $key => &$value)
        <option value="{{ $key }}" @selected($key == $selected)>
            {{ $value }}
        </option>
    @endforeach
</select>

@error($name)
    <div class="text-danger mt-3">{{ $errors->first($name) }}</div>
@enderror
