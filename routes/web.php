<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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


Route::controller(HomePageController::class)->group(function ()
{
    Route::get('/', 'Index')->name('users.index');
    Route::get('/about-us', 'AboutUs')->name('users.about-us');
});

require __DIR__.'/auth.php';
