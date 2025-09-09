<?php

use App\Http\Controllers\clients\AboutController;
use App\Http\Controllers\clients\BookingController;
use App\Http\Controllers\clients\ContactController;
use App\Http\Controllers\clients\DestinationController;
use App\Http\Controllers\clients\HomeController;
use App\Http\Controllers\clients\ToursController;
use App\Http\Controllers\clients\TourDetailController;
use App\Http\Controllers\clients\ServicesController;
use App\Http\Controllers\clients\TravelGuidesController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about',[AboutController::class, 'index'])->name('about');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/tours', [ToursController::class, 'index'])->name('tours');
Route::get('/tour-detail', [TourDetailController::class, 'index'])->name('tour-detail');
Route::get('/destination', [DestinationController::class, 'index'])->name('destination');
Route::get('/booking', [BookingController::class, 'index'])->name('booking');
Route::get('/travel-guides', [TravelGuidesController::class, 'index'])->name('team');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');