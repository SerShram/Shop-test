@php
$product = [
    'productImage' => '/images/product/large-image-1.png',
    'title' => 'Шины Hankook Dynapro HP RA23 215/65 R16 98H летняя резина',
    'tags' => [
        ['class' => 'novelty', 'title' => 'новинка'],
        ['class' => 'hit', 'title' => 'хит'],
        ['class' => 'sale', 'title' => 'скидка']
    ],
    'rating' => 'rating--3',
    'commentHref' => '#',
    'commentText' => 'Отзывы (10)',
    'productInStoke' => 'В наличии: 24 шт.',
    'condition' => [
        ['image' => '/images/card-image/card-sun.png', 'title' => 'летняя'],
        ['image' => '/images/card-image/card-car.png', 'title' => 'легковая'],
        ['image' => '/images/card-image/card-new.png', 'title' => 'новая']
    ],
    'brand' => 'Hankook',
    'brandLink' => '#',
    'brandImage' => '/images/brand/hankook-logo.png',
    'priceNew' => '599 грн.',
    'priceOld' => '1 250 грн.'
];
@endphp
<div class="main-product">
    <div class="wrapper">
        <div class="row">
            <div class="col-xxl-5"></div>
            <div class="col-xxl-7">
                {{ Breadcrumbs::render('product', $product['title']) }}
            </div>
        </div>
       @include('inc.components.product-card', $product)
    </div>
</div>
