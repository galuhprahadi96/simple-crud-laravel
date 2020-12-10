<?php

use App\Http\Controllers\ArticleController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ArticleController::class, 'index']);
Route::get('/create', [ArticleController::class, 'create']);
Route::get('/{title}', [ArticleController::class, 'show']);
Route::post('/', [ArticleController::class, 'store']);
Route::get('/{id}/edit', [ArticleController::class, 'edit']);
Route::put('/{id}', [ArticleController::class, 'update']);
Route::delete('/{id}', [ArticleController::class, 'destroy']);
