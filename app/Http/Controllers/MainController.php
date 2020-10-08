<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller {

    public function showHome () {
        return view('home');
    }
    public function showCategories () {
        return view('categories');
    }
    public function showCatalog () {
        return view('catalog');
    }
    public function showProduct () {

        return view('product');
    }
    public function showContacts () {
        return view('contacts');
    }
}
