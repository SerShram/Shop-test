<?php


Route::get('/', function () {
    return view('home');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/catalog', function () {
    return view('catalog');
});

Route::get('/categories', function () {
    return view('categories');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/uikit', function () {
    return view('ui-kit');
});
