<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::group(['namespace' => 'Site'], function () {
//     Route::get('/', HomeController::class);
// });

Route::get('/', [HomeController::class, '__invoke']);

Route::get('/produtos', [CategoryController::class, 'index']);

Route::get('/produtos/{slug}', [CategoryController::class, 'show']);

Route::get('/blog', [BlogController::class, '__invoke']);

Route::view('sobre', 'site.about.index');
