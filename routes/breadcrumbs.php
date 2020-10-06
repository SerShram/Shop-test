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

// Главная > Каталог
Breadcrumbs::for('catalog', function ($trail) {
    $trail->parent('home');
    $trail->push('Каталог', route('catalog'));
});

// Главная > Категории
Breadcrumbs::for('categories', function ($trail) {
    $trail->parent('home');
    $trail->push('Категории', route('categories'));
});

