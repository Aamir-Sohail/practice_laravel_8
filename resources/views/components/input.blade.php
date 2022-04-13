<div class="form-group">
    <label for="">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" id="" class="form-control" value="{{ old($name) }}"
        placeholder="" aria-describedby="helpId" />
    {{-- <span class="text-danger">
        @error('name')
            {{ $message }}
        @enderror
    </span> --}}
</div>
