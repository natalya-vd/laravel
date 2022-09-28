<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\News\NewsController;
use App\Http\Controllers\News\CategoriesController;

use App\Http\Controllers\Admin\IndexController as AdminIndexController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/info', [InfoController::class, 'index'])->name('info');
Route::get('/auth', [AuthController::class, 'index'])->name('auth');

Route::name('news.')
    ->prefix('news')
    ->group(function () {
        Route::get('/', [NewsController::class, 'list'])->name('home');
        Route::get('/category', [CategoriesController::class, 'list'])->name('category');
        Route::get('/category/{categoryId}', [NewsController::class, 'newsCategory'])->name('category-one');
        Route::get('/category/{categoryId}/{id}', [NewsController::class, 'one'])->name('one');
        Route::get('/add', [NewsController::class, 'addNewsTemplate'])->name('addNewsTemplate');
    });

Route::name('admin.')
    ->prefix('admin')
    ->group(function () {
        Route::get('/', [AdminIndexController::class, 'index'])->name('home');
        Route::get('/test1', [AdminIndexController::class, 'test1'])->name('test1');
        Route::get('/test2', [AdminIndexController::class, 'test2'])->name('test2');
    });


Route::fallback(function () {
    return view('pages.404');
})->name('404');
