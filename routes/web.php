<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\PostController;
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

// HOME ROUTE
Route::get('/', function () {
    return view('welcome');
});

// GENERIC ROUTES
Route::get('/generic', function () {
    return view('generic');
});

// ELEMENT ROUTES
Route::get('/elements', function () {
    return view('elements');
});

// ARTICLE ROUTES
Route::get('/articles', [ArticlesController::class, 'index']);

Route::get('/articles/{article}', [ArticlesController::class, 'show']);

// IGNORE - PLAYGROUND
Route::get('/posts/{post}', [PostController::class, 'show']);
