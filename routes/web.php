<?php

use App\Http\Controllers\Countycontroller;
use Illuminate\Support\Facades\Route;
use App\Models\County;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('hd_county', Countycontroller::class);