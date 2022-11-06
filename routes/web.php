<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\FilesController;
use App\Http\Controllers\SocialProviderController;

use App\Http\Controllers\News\NewsController;
use App\Http\Controllers\News\CategoryController;

use App\Http\Controllers\Account\IndexController as AccountIndexController;

use App\Http\Controllers\Admin\IndexController as AdminIndexController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\ParserController as AdminParserController;

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
Route::get('/save', [AdminIndexController::class, 'save'])->name('save');
Route::get('/images/{fileName}', [FilesController::class, 'images'])->name('images');

Auth::routes();

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

Route::middleware('auth')
    ->group(function () {
        Route::get('/account', AccountIndexController::class)->name('account');

        Route::middleware('is_admin')
            ->name('admin.')
            ->prefix('admin')
            ->group(function () {
                Route::get('/', [AdminIndexController::class, 'index'])->name('home');
                Route::get('/download-img', [AdminIndexController::class, 'downloadImg'])->name('downloadImg');
                Route::get('/parser', AdminParserController::class)->name('parser');
                Route::name('news.')
                    ->prefix('news')
                    ->group(function () {
                        Route::get('/', [AdminNewsController::class, 'list'])->name('list');
                        Route::match(['get', 'post'], '/download', [AdminIndexController::class, 'download'])->name('download');
                    });
                Route::name('category.')
                    ->prefix('category')
                    ->group(function () {
                        Route::get('/', [AdminCategoryController::class, 'list'])->name('list');
                    });
                Route::resource('/news', AdminNewsController::class)->except([
                    'index', 'show'
                ]);
                Route::resource('/category', AdminCategoryController::class)->except([
                    'index', 'show'
                ]);
                Route::resource('/users', AdminUserController::class)->except([
                    'create', 'store', 'show'
                ]);
            });
    });

Route::group(['middlleware' => 'guest'], function () {
    Route::get('/auth/redirect/{driver}', [SocialProviderController::class, 'redirect'])
        ->where('driver', '\w+')
        ->name('social.auth.redirect');

    Route::get('/auth/callback/{driver}', [SocialProviderController::class, 'callback'])
        ->where('driver', '\w+')
        ->name('social.auth.callback');
});

Route::fallback(function () {
    return view('pages.404');
})->name('404');
