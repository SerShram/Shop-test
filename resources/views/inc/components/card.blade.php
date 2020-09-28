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
            'productInStoke' => 'В наличии: 24 шт.'
        ],
         [
            'label' => 'Mark',
            'titleLink' => '#',
            'title' => 'Антифриз Fosser Antifreeze ',
            'description' => '',
            'rating' => 'rating--3',
            'commentHref' => '#',
            'commentText' => 'Отзывы (10)',
            'productInStoke' => 'В наличии: 24 шт.'
        ],
         [
            'label' => 'Mark',
            'titleLink' => '#',
            'title' => 'Антифриз Fosser Antifreeze ',
            'description' => 'FA 12 Readymix 1 л Concentrat, Germany',
            'rating' => '',
            'commentHref' => '#',
            'commentText' => '',
            'productInStoke' => 'В наличии: 24 шт.'
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
            @include('inc.components.star-rating', ['rating' => $card['rating'],'href' => $card['commentHref'],'text' => $card['commentText']])
            <div class="R12 C-11">{{ $card['productInStoke'] }}</div>
        </div>
        <div class="card__image"></div>
        <div class="card__tag"></div>
        <div class="card__price"></div>
        @include('inc.components.button', ['classBtn'=>'buy R14-bup', 'path'=>'#', 'nameBtn'=>'купить товар'])
        <div class="card__counter"></div>
    </div>
@endforeach

