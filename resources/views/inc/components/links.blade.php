@foreach($data as $key)
    <a href="{{ $key['href'] }}" class="{{ $class }}">{{ $key['text'] }}</a>
@endforeach
