<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::apiResource('/fish', 'FishController');

Route::apiResource('/category', 'CategoryController');

Route::apiResource('fish/{fish}/comment', 'CommentController');

Route::post('/like/{comment}', 'LikeController@likeIt');
Route::delete('/like/{comment}', 'LikeController@unlikeIt');