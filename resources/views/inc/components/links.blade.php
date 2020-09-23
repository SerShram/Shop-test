@foreach($data as $key)
    <a href="{{ $key['href'] }}" class="{{ $key['class'] }}">{{ $key['text'] }}</a>
@endforeach
