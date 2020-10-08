@foreach($date as $el)
    <div class="counter-item">
        <img src="{{ $el['image'] }}" alt="image" class="Mr-s">
        <a href='{{ $el['href'] }}' class="{{ $el['hrefClass'] }}">{{ $el['title'] }}</a>
    </div>
@endforeach
