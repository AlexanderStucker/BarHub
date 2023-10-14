<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DrinkController;
use App\Http\Controllers\FoodController;
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
    return view('home');
})->name('home');

Route::get('drinks', [DrinkController::class, 'index'])->name('drinks');
Route::get('food', [FoodController::class, 'index'])->name('food');

Route::get('events', function () {
    return view('events');
})->name('events');

Route::get('team', function () {
    return view('team');
})->name('team');

Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact', [ContactController::class, 'handleForm'])->name('handle-form');

Route::get('impress', function () {
    return view('impress');
})->name('impress');

Route::get('privacy', function () {
    return view('privacy');
})->name('privacy');

Route::get('location', function () {
    return view('location');
})->name('location');

Route::get('found', function () {
    return view('found');
})->name('found');
