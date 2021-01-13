<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('/posts/index', 'index');

Route::get('/slow', function () {
    sleep(2);

    return view('slow');
});
