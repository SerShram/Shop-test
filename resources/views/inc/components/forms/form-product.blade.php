<form action="" class="form-product Bg-yellow-lt P14 C-6 Px-m Py-m Px Py Mr-m">
    <div class="form-product__title P20-b Mb">Выберите размер</div>
    <div class="form-product__select-wrapper Mb-s">
        <select name="" class="form-product__select P14 C-12">
            <option value="" selected>205 / 55 / R16 H</option>
            <option value="">Другой размер</option>
        </select>
    </div>
    <div class="form-product__quantity">
        <div class="P14">{{ $product['productInStoke'] }}</div>
        <div class="form-product__choice">
            <div class="Mr Mr-s">Выберите кол-во:</div>
            <div class="form-product__select-wrapper Mb-s">
                <select name="" class="form-product__select select--small P14 C-12">
                    <option value="" selected>4 шт.</option>
                    <option value="">3шт.</option>
                </select>
            </div>
        </div>
    </div>
    <div class="form-product__counter Mb Mb-s">
        <div class="card__counter-item">
            <img src="/images/card-image/card-balance.png" alt="image" class="Mr-s">
            <a href='#' class="t-underline P14 C-6 Mr-m Mr-s">Сравнить товар</a>
        </div>
        <div class="card__counter-item">
            <img src="/images/card-image/card-quality.png" alt="image" class="Mr-s">
            <a href='#' class="t-underline P14 C-6 Mr-m Mr-s">В избранное</a>
        </div>
    </div>
    <div class="Mb Mb-s">
        <span class="E26-bi Mr Mr-s">{{ $product['priceNew'] }}</span>
        <span class="E16-bi C-10 t-line">{{ $product['priceOld'] }}</span>
    </div>
    @include('inc.components.button', ['classBtn'=>'buy btn--large P14-bup', 'path'=>'#', 'nameBtn'=>'купить товар'])
</form>

