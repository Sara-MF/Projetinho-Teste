<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;

// Padrão
// Route::get('/', function () {
//     return view('welcome');
// });

// Agrupamento que falhou
// Route::group(['namespace' => 'Site'], function () {
//     Route::get('/', HomeController::class);
// });

Route::get('/', [HomeController::class, '__invoke']);

Route::get('/produtos', [CategoryController::class, 'index']);

Route::get('/produtos/{slug}', [CategoryController::class, 'show']);

Route::get('/blog', [BlogController::class, '__invoke']);

Route::view('sobre', 'site.about');

Route::get('/contato', [ContactController::class, 'index']);
Route::post('/contato', [ContactController::class, 'form']);

Route::get('/teste/commit', [TesteController::class, 'commit']);