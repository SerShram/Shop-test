@foreach($data as $item)
    @if($item['image'] && $item['title'])
    <div class="condition">
        <div class="condition__image">
            <img src="{{ $item['image'] }}" alt="image">
        </div>
        <div class="condition__title">{{ $item['title'] }}</div>
    </div>
    @endif
@endforeach

