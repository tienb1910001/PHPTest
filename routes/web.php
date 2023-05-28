<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Product;

Auth::routes();

Route::get('/products', 'HomeController@index')->name('home');

Route::resource('products', 'ProductController')->middleware('auth');

