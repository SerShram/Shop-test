@php
    $cards = [
        [
            'label' => 'Mark',
            'titleLink' => '#',
            'title' => 'Антифриз Fosser Antifreeze ',
            'description' => 'FA 12 Readymix 1 л Concentrat, Germany',
            'rating' => 'rating--5',
            'commentHref' => '#',
            'commentText' => 'Отзывы (10)',
            'productInStoke' => 'В наличии: 24 шт.',
            'condition' => [
                ['image' => '/images/card-image/card-sun.png', 'title' => 'летняя'],
                ['image' => '/images/card-image/card-car.png', 'title' => 'легковая'],
                ['image' => '/images/card-image/card-new.png', 'title' => 'новая']
            ],
            'productImage' => '/images/product/image-1.png',
            'tags' => [
                ['class' => 'novelty', 'title' => 'новинка'],
                ['class' => 'hit', 'title' => 'хит'],
                ['class' => 'sale', 'title' => 'скидка']
            ],
            'priceNew' => '599 грн.',
            'priceOld' => '1 250 грн.'
        ],
         [
            'label' => 'Mark',
            'titleLink' => '#',
            'title' => 'Антифриз Fosser Antifreeze ',
            'description' => 'FA 12 Readymix 1 л Concentrat, Germany',
            'rating' => 'rating--3',
            'commentHref' => '#',
            'commentText' => 'Отзывы (10)',
            'productInStoke' => 'В наличии: 24 шт.',
            'condition' => [
                ['image' => '/images/card-image/card-sun.png', 'title' => 'летняя'],
                ['image' => '/images/card-image/card-new.png', 'title' => 'новая']
            ],
            'productImage' => '/images/product/image-2.png',
            'tags' => [
                ['class' => 'novelty', 'title' => 'новинка'],
                ['class' => 'hit', 'title' => 'хит']
            ],
            'priceNew' => '599 грн.',
            'priceOld' => '1 250 грн.'
        ],
         [
            'label' => 'Mark',
            'titleLink' => '#',
            'title' => 'Антифриз Fosser Antifreeze ',
            'description' => '',
            'rating' => '',
            'commentHref' => '#',
            'commentText' => '',
            'productInStoke' => 'В наличии: 24 шт.',
            'condition' => [
                ['image' => '/images/card-image/card-sun.png', 'title' => 'летняя'],
                ['image' => '/images/card-image/card-car.png', 'title' => 'легковая'],
                ['image' => '/images/card-image/card-new.png', 'title' => 'новая']
            ],
            'productImage' => '/images/product/image-3.png',
            'tags' => [
                ['class' => 'novelty', 'title' => 'новинка']
            ],
            'priceNew' => '9 570 грн.',
            'priceOld' => '1 250 грн.'
        ],
         [
            'label' => 'Mark',
            'titleLink' => '#',
            'title' => 'Антифриз Fosser Antifreeze ',
            'description' => 'FA 12 Readymix 1 л Concentrat, Germany',
            'rating' => 'rating--5',
            'commentHref' => '#',
            'commentText' => 'Отзывы (10)',
            'productInStoke' => 'В наличии: 24 шт.',
            'condition' => [
                ['image' => '/images/card-image/card-sun.png', 'title' => 'летняя'],
                ['image' => '/images/card-image/card-car.png', 'title' => 'легковая']
            ],
            'productImage' => '/images/product/image-4.png',
            'tags' => [],
            'priceNew' => '599 грн.',
            'priceOld' => ''
        ],
]
@endphp
@foreach($cards as $card)
    <div class="card">
        <div class="card__label R14-l C-9 Mb Bg-grey-lt">{{ $card['label'] }}</div>
        <a href="{{ $card['titleLink'] }}" class="card__title R17 C-6">
            <span>{{ $card['title']}}</span>
            <span>{{ $card['description'] }}</span>
        </a>
        <div class="card__rating">
            @include('inc.components.widgets.star-rating', ['rating' => $card['rating'],'href' => $card['commentHref'],'text' => $card['commentText']])
            <div class="R12 C-11">{{ $card['productInStoke'] }}</div>
        </div>
        <div class="card__block-image">
            @include('inc.components.widgets.condition', ['data' => $card['condition']])
            <img class="card__product-img" src="{{ $card['productImage'] }}" alt="">
        </div>
        <div class="card__status">
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
            <div class="card__counter-item">
                <img src="/images/card-image/card-balance.png" alt="image" class="card__counter-image">
                <a href=#" class="card__counter-text R14 C-6">Сравнить товар</a>
            </div>
            <div class="card__counter-item">
                <img src="/images/card-image/card-quality.png" alt="image" class="card__counter-image">
                <a href=#" class="card__counter-text R14 C-6">В избранное</a>
            </div>
        </div>
    </div>
@endforeach

