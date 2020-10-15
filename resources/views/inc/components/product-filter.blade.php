<form action="#" method="get" class="product-filter C-6">
    <div class="P30-b">Фильтр товаров</div>
    <div class="product-filter__block">
        <div class="product-filter__title P17">Цена</div>
        @include('inc.components.forms.form-component.range')
    </div>
    <div class="product-filter__block">
        <div class="product-filter__title P17">Производитель</div>
        @foreach($filter['manufacturer'] as $manufacturer)
            <label class="checkbox">
                <input type="checkbox" name="{{ $manufacturer }}" class="checkbox__inp">
                <span class="checkbox__text P14 C11">{{ $manufacturer }}</span>
            </label>
        @endforeach
        <a href="#" class="t-underline P14 C-6">Показать все производители</a>
    </div>
    <div class="product-filter__block">
        <div class="product-filter__title P17">Диаметр</div>
        @foreach($filter['diameter'] as $item)
            <label class="checkbox">
                <input type="checkbox" name="{{ $item }}" class="checkbox__inp">
                <span class="checkbox__text P14 C11">{{ $item }}</span>
            </label>
        @endforeach
    </div>
    <div class="product-filter__block">
        <div class="product-filter__title P17">Сезонность</div>
        @foreach($filter['seasonality'] as $item)
            <label class="checkbox">
                <input type="checkbox" name="{{ $item }}" class="checkbox__inp">
                <span class="checkbox__text P14 C11">{{ $item }}</span>
            </label>
        @endforeach
        <div class="product-filter__button-container">
            <button type="submit" class="btn btn-filter">Очистить фильтр</button>
        </div>
    </div>

</form>
