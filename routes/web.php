<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about-us', [AboutController::class, 'index'])->name('about-us');

Route::post('/contact-us', [ContactController::class, 'store'])->name('contact');
Route::get('/services', [PagesController::class, 'services'])->name('services');
Route::get('/contact-us', [PagesController::class, 'contact'])->name('contact');
Route::get('/events', [PagesController::class, 'events'])->name('events');
Route::get('/dashboard', function () {
    return view('dashboard'); 
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

