<?php

use App\Http\Controllers\Site\Article\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\Newsletters\NewslettersSubscriberController;
use \App\Http\Controllers\Site\SiteController;

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


Route::group(['as' => 'site.'], function () {
    Route::get('/', [SiteController::class, 'index'])->name('index');
    Route::get('/categories', [SiteController::class, 'categories'])->name('categories.index');
    Route::get('/categories/{category}', [SiteController::class, 'category'])->name('categories.show');
    Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
    Route::get('@{username}/{article}', [ArticleController::class, 'show'])->name('articles.show');
    Route::get('/users', [SiteController::class, 'users'])->name('users.index');
    Route::get('@{username}', [SiteController::class, 'user'])->name('users.show');




    Route::post('newsletters/subscibe', [NewslettersSubscriberController::class, 'subscribe'])->name('newsletters.subscribe');
    Route::post('newsletters/unsubscibe', [NewslettersSubscriberController::class, 'unsubscibe'])->name('newsletters.unsubscibe');
});

Route::group(['prefix' => 'account', 'middleware' => 'auth', 'as' => 'account.'], function () {
    //
});

