<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/',  PostController::class.'@index')->name('post.index');
Route::get('/create',  PostController::class.'@create')->name('post.create');
Route::post('/store',  PostController::class.'@store')->name('post.store');
