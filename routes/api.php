<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::apiResource('/fish', 'FishController');

Route::apiResource('/category', 'CategoryController');

Route::apiResource('fish/{fish}/comment', 'CommentController');

Route::post('/like/{comment}', 'LikeController@likeIt');
Route::delete('/like/{comment}', 'LikeController@unlikeIt');

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});