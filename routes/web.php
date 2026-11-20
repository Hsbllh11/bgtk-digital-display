<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/display');
});

Route::get('/display', function () {
    return view('display.index');
});