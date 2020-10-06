@foreach($categories['category'] as $key)
    <div class="category-card">
        <div class="category-card__image">
            <img src="{{ $key['image'] }}" alt="image">
        </div>
        <div class="category-card__title">
            <a class="category-card__link P17 C-6" href="{{ $key['href'] }}">{{ $key['hrefTitle'] }}</a>
        </div>
        <div class="category-card__quantity P12 C-11">{{ $key['quantity'] }}</div>
    </div>
@endforeach
