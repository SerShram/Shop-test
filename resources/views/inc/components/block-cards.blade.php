<div class="cards Mb-xl">
    <div class="cards__head">
        <div class="cards__title R36 C-6">Карточки товаров</div>
        <a href="{{ route('catalog') }}" class="cards__link R14 C-6">Ссылка в каталог</a>
    </div>
    <div class="cards__row">
        @foreach($cards as $card)
            <div class="card">
                <div class="card__label R14-l C-9 Mb Bg-grey-lt">{{ $card['label'] }}</div>
                <a href="{{ $card['titleLink'] }}" class="card__title R17 C-6">
                    <span>{{ $card['title']}}</span>
                    <span>{{ $card['description'] }}</span>
                </a>
                <div class="card__rating R13 C-10">
                    @include('inc.components.widgets.star-rating', ['rating' => $card['rating'],'href' => $card['commentHref'],'text' => $card['commentText']])
                    <div class="R12 C-11">{{ $card['productInStoke'] }}</div>
                </div>
                <div class="card__block-image">
                    <div class="R10-up C-10">
                        @include('inc.components.widgets.condition', ['data' => $card['condition']])
                    </div>
                    <img class="card__product-img" src="{{ $card['productImage'] }}" alt="">
                </div>
                <div class="card__status R10-bup">
                    @include('inc.components.widgets.tag', ['tags' => $card['tags']])
                </div>
                <div class="card__price">
                    <div class="R26-i C-6">{{ $card['priceNew'] }}</div>
                    <div class="card__price-old R16-bli-up C-10">{{ $card['priceOld'] }}</div>
                </div>
                <div class="card__button">
                    @include('inc.components.button', ['classBtn'=>'buy R14-bup', 'path'=>'#', 'nameBtn'=>'купить товар'])
                </div>
                <div class="card__counter">
                    @include('inc.components.widgets.counter', [
          'date' => [
              ['image' => '/images/card-image/card-balance.png', 'href' => '#', 'hrefClass' => 't-underline R14 C-6', 'title' => 'Сравнить товар'],
              ['image' => '/images/card-image/card-quality.png', 'href' => '#', 'hrefClass' => 't-underline R14 C-6', 'title' => 'В избранное']
        ]
        ])
                </div>
            </div>
        @endforeach
    </div>
</div>
