<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dev;



Route::get('/','App\Http\Controllers\dev@register');
Route::post('/store','App\Http\Controllers\dev@store');
Route::get('/data','App\Http\Controllers\dev@display');
Route::get('/edit/{id}','App\Http\Controllers\dev@edit');
Route::post('/update/{id}','App\Http\Controllers\dev@update');
Route::get('/delete/{id}','App\Http\Controllers\dev@delete');
