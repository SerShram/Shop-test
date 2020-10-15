<div class="wrapper">
    <div class="row">
        <div class="col-xxl-3">
            @include('inc.components.product-filter')
        </div>
        <div class="col-xxl-9">
            <div class="Mb Mb-s">
                {{ Breadcrumbs::render('catalog') }}
            </div>
            <div class="cards Mb-xl">
                <div class="cards__head">
                    <div class="cards__title P36-b C-6">Автомобильные шины</div>
                   {{-- <div class="form-sort P14">
                        <div class="Mr">Сортировать</div>
                        <div class="">
                            <select name="" class="form-product__select C-12">
                                <option value="" selected>по стоимости</option>
                                <option value="">по стоимости</option>
                            </select>
                        </div>
                    </div>--}}
                </div>
                <div class="cards__row">
                    @foreach($cards as $card)
                        <div class="card card--catalog">
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
                                @include('inc.components.widgets.counter', [
                      'date' => [
                          ['image' => '/images/card-image/card-balance.png', 'href' => '#', 'hrefClass' => 't-underline P14 C-6', 'title' => 'Сравнить товар'],
                          ['image' => '/images/card-image/card-quality.png', 'href' => '#', 'hrefClass' => 't-underline P14 C-6', 'title' => 'В избранное']
                    ]
                    ])
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>