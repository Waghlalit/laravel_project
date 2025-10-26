<?php

use Illuminate\Support\Facades\Route;

// Demo page route
Route::get('/demo', function () {
    return view('demo');
});

// Optional: home route pointing to demo
Route::get('/', function () {
    return view('demo');
});
