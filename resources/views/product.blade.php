@php
    $links = config('mock.links');
    $cards = config('mock.cards');
    $product = config('mock.product');
@endphp

@extends('layouts.app')

@section('title-block') Product @endsection
@section('content')
    <div class="wrapper">
        <div class="row">
            <div class="col-xxl-5 col-xl-4 col-lg-3"></div>
            <div class="col-xxl-7 col-xl-8 col-lg-9 col-12">
                {{ Breadcrumbs::render('product', $product['title']) }}
            </div>
        </div>
        @include('inc.components.product-card')
        @include('inc.components.tabs.tabs-block', config('mock.tabs'))
        {{----------------Карточки товаров-----------------------------------------------}}
        <div class="cards Mb-xl">
            <div class="cards__head">
                <div class="cards__title P36-b C-6">Похожие товары</div>
                <a href="{{ route('catalog') }}" class="cards__link P14 C-6">Перейти в каталог</a>
            </div>
            <div class="cards__row">
                @foreach($cards as $card)
                    <div class="card">
                        <div class="card__label P14-l C-9 Mb Bg-grey-lt">{{ $card['label'] }}</div>
                        <a href="{{ $card['titleLink'] }}" class="card__title P17 C-6">
                            <span>{{ $card['title']}}</span>
                            <span>{{ $card['description'] }}</span>
                        </a>
                        <div class="card__rating P13 C-10">
                            @include('inc.components.widgets.star-rating', ['rating' => $card['rating'],'href' => $card['commentHref'],'text' => $card['commentText']])
                            <div class="R12 C-11">{{ $card['productInStoke'] }}</div>
                        </div>
                        <div class="card__block-image">
                            <div class="P10-up C-10">
                                @include('inc.components.widgets.condition', ['data' => $card['condition']])
                            </div>
                            <img class="card__product-img" src="{{ $card['productImage'] }}" alt="">
                        </div>
                        <div class="card__status P10-bup">
                            @include('inc.components.widgets.tag', ['tags' => $card['tags']])
                        </div>
                        <div class="card__price">
                            <div class="E26-bi C-6">{{ $card['priceNew'] }}</div>
                            <div class="card__price-old R16-bli-up C-10">{{ $card['priceOld'] }}</div>
                        </div>

                        @if(isset($card['quantity']) && $card['quantity'])
                            <div class="card__button-row">
                                <div class="card__quantity-row">
                                    <div class="card__product-quantity P18 C-12 Bg-grey-lt">{{ $card['quantity'] }}</div>
                                    <div class="P14 C-6">шт.</div>
                                </div>
                                @include('inc.components.button', ['classBtn'=>'buy P14-bup', 'path'=>'#', 'nameBtn'=>'купить товар'])
                            </div>
                        @else
                            <div class="card__button">
                                @include('inc.components.button', ['classBtn'=>'buy P14-bup', 'path'=>'#', 'nameBtn'=>'купить товар'])
                            </div>
                        @endif
                        <div class="card__counter">
                            <div class="card__counter-item">
                                <img src="/images/card-image/card-balance.png" alt="image" class="Mr-s">
                                <a href='#' class="t-underline R14 C-6">Сравнить товарр</a>
                            </div>
                            <div class="card__counter-item">
                                <img src="/images/card-image/card-quality.png" alt="image" class="Mr-s">
                                <a href='#' class="t-underline R14 C-6">В избранное</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
