<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::view('/counter', 'counter')->name('counter');
Route::view('/calculator', 'calculator')->name('calculator');
Route::view('/todo-list', 'todo-list')->name('todo-list');
Route::view('/cascading-dropdown', 'cascading-dropdown')->name('cascading-dropdown');
Route::view('/products', 'product-search')->name('products');
Route::view('/image-upload', 'image-upload')->name('image-upload');
Route::view('/register', 'register')->name('register');
