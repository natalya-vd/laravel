<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\News\NewsController;
use App\Http\Controllers\News\CategoryController;

use App\Http\Controllers\Admin\IndexController as AdminIndexController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\FilesController;
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
Route::get('/save', [AdminIndexController::class, 'save'])->name('save');
Route::get('/images/{fileName}', [FilesController::class, 'images'])->name('images');

Route::name('news.')
    ->prefix('news')
    ->group(function () {
        Route::get('/', [NewsController::class, 'list'])->name('list');
        Route::name('category.')
            ->prefix('category')
            ->group(function () {
                Route::get('/', [CategoryController::class, 'list'])->name('list');
                Route::get('/{slug}', [CategoryController::class, 'newsList'])->name('newsList');
                Route::get('/{slug}/{id}', [NewsController::class, 'one'])->name('one');
            });
    });

Route::name('admin.')
    ->prefix('admin')
    ->group(function () {
        Route::get('/', [AdminIndexController::class, 'index'])->name('home');
        Route::get('/download-img', [AdminIndexController::class, 'downloadImg'])->name('downloadImg');
        Route::name('news.')
            ->prefix('news')
            ->group(function () {
                Route::get('/', [AdminNewsController::class, 'list'])->name('list');
                Route::match(['get', 'post'], '/create', [AdminNewsController::class, 'create'])->name('create');
                Route::match(['get', 'post'], '/{news}/edit', [AdminNewsController::class, 'update'])->name('update');
                Route::get('/{news}/delete', [AdminNewsController::class, 'delete'])->name('delete');
                Route::match(['get', 'post'], '/download', [AdminIndexController::class, 'download'])->name('download');
            });
        Route::name('category.')
            ->prefix('category')
            ->group(function () {
                Route::get('/', [AdminCategoryController::class, 'list'])->name('list');
                Route::match(['get', 'post'], '/create', [AdminCategoryController::class, 'create'])->name('create');
                Route::match(['get', 'post'], '/{category}/edit', [AdminCategoryController::class, 'update'])->name('update');
                Route::get('/{category}/delete', [AdminCategoryController::class, 'delete'])->name('delete');
            });
    });


Route::fallback(function () {
    return view('pages.404');
})->name('404');
