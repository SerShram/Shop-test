<div class="{{ $opMenuClass }}">
    @foreach($data as $key)
        <a href="{{ $key['link'] }}" class="{{ $linkClass }}">
            <span class="{{ $spanClass_1.' '. $key['imgClass'] }}"></span>
            <span class="{{ $spanClass_2 }}">{{ $key['text'] }}</span>
        </a>
    @endforeach
</div>
