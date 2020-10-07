<?php

// Главная
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Главная', route('home'));
});
// Главная > Контакты
Breadcrumbs::for('contacts', function ($trail) {
    $trail->parent('home');
    $trail->push('Контакты', route('contacts'));
});
// Главная > Категории
Breadcrumbs::for('categories', function ($trail) {
    $trail->parent('home');
    $trail->push('Категории', route('categories'));
});
// Главная > Категории > Каталог
Breadcrumbs::for('catalog', function ($trail, $catalog='Автомобильные шины') {
    $trail->parent('categories');
    $trail->push($catalog, route('catalog'));
});
// Главная > Категории > Каталог > Продукт
Breadcrumbs::for('product', function ($trail, $product) {
    $trail->parent('catalog');
    $trail->push($product, route('product'));
});
