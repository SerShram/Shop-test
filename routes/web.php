<?php

Route::name('home')->get('/', 'MainController@showHome');

Route::name('contacts')->get('/contacts', 'MainController@showContacts');

Route::name('catalog')->get('/catalog', 'MainController@showCatalog');

Route::name('categories')->get('/categories', 'MainController@showCategories');

Route::name('product')->get('/product', 'MainController@showProduct');

Route::get('/uikit', function () {
    return view('ui-kit');
});
