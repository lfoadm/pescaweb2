<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'home');
Route::view('/{any}', 'home');



/* Route::get('/teste', function () {
    return view('teste');
    
}); */