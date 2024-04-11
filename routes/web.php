<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    // return 'About Page';

    // return ['foo' => 'bar'];

    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
