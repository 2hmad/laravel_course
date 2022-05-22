<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SchoolsController;
use App\Http\Controllers\UploadController;
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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::get('/', [HomeController::class, 'index']);

        Route::get('login', [LoginController::class, 'index']);
        Route::post('/login', [LoginController::class, 'login'])->name('loginUser');

        Route::get('register', [RegisterController::class, 'index']);
        Route::post('/register', [RegisterController::class, 'create'])->name('createUser');

        Route::group(['middleware' => 'checkAuth'], function () {
            Route::get('dashboard', function () {
                return 'Logged In';
            });
            Route::get('accounts', function () {
                return 'Accounts';
            });
        });
    }
);
