<div class="product">
    <div class="row">
        <div class="col-5">
            <div class="product__image">
                <img src="{{ $product['productImage'] }}" alt="">
            </div>
        </div>
        <div class="col-7">
            <h2 class="P24-b C-6">{{ $product['title'] }}</h2>
            <div class="product__status-rating">
                <div class="product__status Mr">
                    @include('inc.components.widgets.tag', ['tags' => $product['tags']])
                </div>
                <div class="product__rating R13 C-10">
                    @include('inc.components.widgets.star-rating', ['rating' => $product['rating'],'href' => $product['commentHref'],'text' => $product['commentText']])
                </div>
                <div class="product__condition-brand">
                    <div class="product__condition P10-up C-10 Mr-xl">
                        @include('inc.components.widgets.condition', ['data' => $product['condition']])
                    </div>
                    <div class="product__brand">
                        <img src="{{ $product['brandImage'] }}" alt="" class="Mr-m">
                        <a href="{{ $product['brandLink'] }}" class="product__brand-link P14 C-13">Другие модели {{ $product['brand'] }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

