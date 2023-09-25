<?php

use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [HomeController::class, "index"])->name('index');
// Route::get('/index', function () {
//     return view('index');
// })->name('index');

Route::get('/deals', function () {
    return view('deals');
})->name('deals');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/reservation', function () {
    return view('reservation');
})->name('reservation');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::group(['middleware' => ['permission:manage users']], function () {
        Route::resource("user", UserController::class);
    });
    



});