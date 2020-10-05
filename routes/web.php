<?php

Route::name('home')->get('/', 'HomeController@show');

Route::name('contacts')->get('/contacts', 'ContactsController@show');

Route::name('catalog')->get('/catalog', 'CatalogController@show');

Route::name('categories')->get('/categories', 'CategoriesController@show');

Route::name('product')->get('/product', 'ProductController@show');

Route::get('/uikit', function () {
    return view('ui-kit');
});
