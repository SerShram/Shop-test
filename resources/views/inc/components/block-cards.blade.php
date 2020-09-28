<div class="cards Mb-xl">
    <div class="wrapper">
        <div class="cards__head">
            <div class="cards__title R36 C-6">Карточки товаров</div>
            @include('inc.components.links', ['class' => 'cards__link R14 C-6', 'data' => [['href' => '#', 'text' => 'Ссылка в каталог']]])
        </div>
        <div class="cards__row">
            @include('inc.components.card')
        </div>
    </div>
</div>
