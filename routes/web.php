<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('layouts.admin');
});

Route::get('/', function () {
    return view('welcome');
});
