<div class="select-style">
    <select name="{{ $name }}" class="{{ $class }}">
        <option value="{{ $optValue }}" selected>{{ $optText }}</option>
        @foreach($options as $option)
            <option value="{{ $option['value'] }}">{{ $option['text'] }}</option>
        @endforeach
    </select>
</div>
