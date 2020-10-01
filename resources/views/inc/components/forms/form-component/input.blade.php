<label>
    @if(isset($inputTitle))
        <div class="input-title">{{ $inputTitle }}</div>
    @endif
    <input type="{{ $type }}" name="{{ $name }}" class="{{ $class }}" placeholder="{{ $placeholder }}">
    <span class="error"></span>
</label>
