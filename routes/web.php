<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;

Route::get('/user/{name?}', function ($name='John') {
return 'Nama saya '.$name;
});

Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/about', [PageController::class,'about']);
Route::get('/articles/{id}', [PageController::class,'articles']);


Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);


Route::get('/greeting', [WelcomeController::class, 'greeting']);



