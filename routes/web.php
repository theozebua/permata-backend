<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\{
    BookController,
    DashboardController,
    EventController,
    NewsController,
    WordController
};

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

Route::middleware('guest')->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('auth.index');
    Route::post('/', [AuthController::class, 'signin'])->name('auth.signin');
});

Route::middleware('auth')->group(function () {
    Route::get('/admin', DashboardController::class)->name('dashboard.index');

    Route::resources([
        'books' => BookController::class,
        'events' => EventController::class,
        'news' => NewsController::class,
        'words' => WordController::class
    ]);

    Route::post('/signout', [AuthController::class, 'signout'])->name('auth.signout');
});
