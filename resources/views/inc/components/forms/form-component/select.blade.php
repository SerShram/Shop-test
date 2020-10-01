<div class="{{ $classDecor ? $classDecor : 'form-option__decor' }}">
    <select name="{{ $name }}" class="{{ $class ? $class : 'form-option__select R14 Bg-white C-10' }}">
        <option value="{{ $optValue }}" selected>{{ $optText }}</option>
        @foreach($options as $option)
            <option value="{{ $option['value'] }}">{{ $option['text'] }}</option>
        @endforeach
    </select>
</div>
