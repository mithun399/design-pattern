<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('sigleton', [\App\Http\Controllers\SingleTonController::class, 'singleTonExample']);
