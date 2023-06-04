<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PostsController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/posts', function () {
    return '<h1>記事リスト</h1>';
});

Route::get('/posts/{id}', [PostsController::class, 'show']);
