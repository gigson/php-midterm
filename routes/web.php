<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\GenresController;
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

Route::get('/', [BooksController::class, "index"]);
Route::get('/book/{id}', [BooksController::class, "show"])->name('show');

Route::get('/admin/books', [BooksController::class, "create"])->name('bookCreate');
Route::post('/admin/books/store', [BooksController::class, "store"])->name('bookStore');
Route::post('/admin/books/delete', [BooksController::class, "destroy"])->name('bookDelete');

Route::get('/admin/genres', [GenresController::class, "create"])->name('genreCreate');
Route::post('/admin/genres/store', [GenresController::class, "store"])->name('storeGenre');
Route::post('/admin/genres/delete', [GenresController::class, "destroy"])->name('deleteGenre');
