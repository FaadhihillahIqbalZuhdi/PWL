<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

// PRAKTIKUM 1
Route::get('/hello', function () {
 return 'Hello World';
});


Route::get('/world', function () {
 return 'World';
});


Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});


Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
 return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});


Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});



// PRAKTIKUM 2
Route::get('/user/profile', function () {
    //
   })->name('profile');

Route::get(
    '/user/profile', [UserProfileController::class, 'show'] )->name('profile');

Route::get(
    '/index', [PageController::class,'index']);

Route::get(
    '/about', [PageController::class,'about']);

Route::get(
    '/articles/{id}', [PageController::class,'articles']);


Route::resource('photos', PhotoController::class)->only(['index', 'show']);

Route::resource('photos', PhotoController::class)->except(['create', 'store', 'update', 'destroy']);


// PRAKTIKUM 3
// Route::get('/greeting', function () {
//     return view('blog.hello', ['name' => 'Iqbal']);
//     });

Route::get('/greeting', [WelcomeController::class,
    'greeting']);


