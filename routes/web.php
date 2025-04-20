<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AvisController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\AgenceController;
use App\Http\Controllers\ChambreController;
use App\Http\Controllers\ReservationController;

Route::get('/', [App\Http\Controllers\PublicController::class, 'index']);
Route::get('/client/hotels', [App\Http\Controllers\PublicController::class, 'hotels']);
Route::get('/client/hotels/details/{id}', [App\Http\Controllers\PublicController::class, 'details']);
Route::get('/client/hotels/checkout/{id}', [App\Http\Controllers\PublicController::class, 'checkout']);
// ************* Partie Client *************



// ************* Partie Admin *************
Route::resource('reservations', ReservationController::class);
Route::resource('avis', AvisController::class);
Route::resource('chambres', ChambreController::class);
Route::resource('hotels', HotelController::class);
Route::resource('agences', AgenceController::class);
Route::resource('users', UserController::class);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
