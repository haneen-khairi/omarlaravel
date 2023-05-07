<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('home');
});

Route::get('/contact-us', function () {
    return view('contact');
});

Route::get('blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog');

Route::get('/blog-post', function () {
    return view('blog-post');
});
Route::get('/acid', function () {
    return view('acid');
});
Route::get('/toxic', function () {
    return view('toxic');
});
