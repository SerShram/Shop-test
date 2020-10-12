<div class="rating">
    <div class="rating__star rating--{{ $rating }}"></div>
    @if(isset($href))
        <a href="{{ $href }}" class="rating__comment R13 C-10">{{ $text ? $text : 'Без отзывов' }}</a>
    @else
        <div>Оценка {{ $rating }}</div>
    @endif
</div>

