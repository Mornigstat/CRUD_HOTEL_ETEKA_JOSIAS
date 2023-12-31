<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;

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
Route::get('/hotel', [HotelController::class, 'liste_hotel']);
Route::get('/ajouter', [HotelController::class, 'ajouter_hotel']);
Route::post('/ajouter/traitement', [HotelController::class, 'ajouter_hotel_traitement']);
