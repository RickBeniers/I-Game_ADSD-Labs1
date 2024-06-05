<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('register');
});
Route::get('/sim', function(){
    return view('sim');
});
route::get('/rolselect', function(){
    return view('rolselect');
});
