<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\LogoutController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\OssController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\AboutController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['throttle:60, 1'])->group(function () {
    Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
    Route::get('/oss', [OssController::class, 'index'])->name('oss');
    Route::get('/projet', [ProjetController::class, 'index'])->name('projet');
    Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::post('/newsletter/subscribe/', [NewsletterController::class, 'subscribe'])->name('subscribe-newsletter');
});

Auth::routes();

Route::middleware(['throttle:60, 1', 'auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/logout', [LogoutController::class, 'perForm'])->name('logout.perForm');
});

Route::middleware(['throttle:60, 1', 'auth'])->group(function () {
    Route::get('/privates', function () {
        return "Privates routes";
    });
});
