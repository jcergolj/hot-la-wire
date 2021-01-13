<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::view('/', 'welcome');

Route::view('/posts/index', 'index');
Route::view('/posts/create', 'create');
Route::post('/posts', function (Request $request) {
    $request->validate([
        'title' => 'required',
        'body' => 'required'
    ]);

    Session::flash('message', 'Post has been successfully saved.');

    return response()->redirectTo('/posts/index');
});

Route::get('/slow', function () {
    sleep(2);

    return view('slow');
});
