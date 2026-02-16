<?php

use Illuminate\Support\Facades\Route;
use App\Models\County;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('hd_county', County::class);