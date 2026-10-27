<?php

use Illuminate\Support\Facades\Route;


// home route (acceuil)
Route::get('/', function () {
    return view('home');
});