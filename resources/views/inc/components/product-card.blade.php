<div class="product">
    <div class="row">
        <div class="col-xxl-5 col-xl-4 col-lg-3">
            <div class="product__image">
                <img src="{{ $product['productImage'] }}" alt="">
            </div>
        </div>
        <div class="col-xxl-7 col-xl-8 col-lg-9 col-12">
            <h2 class="P24-b C-6">{{ $product['title'] }}</h2>
            <div class="product__status-rating">
                <div class="product__status Mr">
                    @include('inc.components.widgets.tag', ['tags' => $product['tags']])
                </div>
                <div class="product__rating R13 C-10">
                    @include('inc.components.widgets.star-rating', ['rating' => $product['rating'],'href' => $product['commentHref'],'text' => $product['commentText']])
                </div>
            </div>
            <div class="product__condition-brand Mb">
                <div class="product__condition P10-up C-10 Mr-xl">
                    @include('inc.components.widgets.condition', ['data' => $product['condition']])
                </div>
                <div class="product__brand">
                    <img src="{{ $product['brandImage'] }}" alt="" class="Mr-m">
                    <a href="{{ $product['brandLink'] }}" class="product__brand-link P14 C-13">Другие модели {{ $product['brand'] }}</a>
                </div>
            </div>
            <div class="product__form-block Mb">
                @include('inc.components.forms.form-product')
                @include('inc.components.widgets.vantage')
                <div class="product__description C-6">
                    <h3 class="P20-b">Характеристики</h3>
                    @foreach($product['description'] as $item)
                        <div class="product__desc-row">
                            <div class="P14-b">{{ $item['key'] }}</div>
                            <div class="P14">{{ $item['value'] }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

