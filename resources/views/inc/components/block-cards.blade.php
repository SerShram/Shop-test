<div class="cards Mb-xl">
    <div class="cards__head">
        <div class="cards__title R36 C-6">Карточки товаров</div>
        <a href="{{ route('catalog') }}" class="cards__link R14 C-6">Ссылка в каталог</a>
    </div>
    <div class="cards__row">
        @include('inc.components.card', config('mock.cards'))
    </div>
</div>
