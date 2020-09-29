<div class="condition">
    @foreach($data as $item)
        @if($item['image'] && $item['title'])
        <div class="condition__item">
            <img src="{{ $item['image'] }}" alt="image" class="condition__image">
            <div class="condition__title R10-up C-10">{{ $item['title'] }}</div>
        </div>
        @endif
    @endforeach
</div>
