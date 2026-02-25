<?php

use Illuminate\Support\Facades\Route;

Route::get('/world', function () {
    return 'World';
});
Route::get('/opening', function () {
    return 'Selamat Datang';
});
Route::get('/about', function ($name='Muhammad Firman Aditiasmara', $nim='244107020094') {
    return 'Nama saya '.$name .' dengan NIM '.$nim;
});


use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;

Route::get('/user/{name?}', function ($name) {
return 'Nama saya '.$name;
});


Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function ($id, ) {
    return 'Halaman Artikel dengan ID: '.$id;
});

// Route::get('/user/{name?}', function ($name=null) {
// return 'Nama saya '.$name;
// });

Route::get('/user/{name?}', function ($name='John') {
return 'Nama saya '.$name;
});



// Route::get('/about', [PageController::class,'about']);
// Route::get('/articles/{id}', [PageController::class,'articles']);


Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);


Route::get('/greeting', [WelcomeController::class, 'greeting']);



