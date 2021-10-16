<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LogoutController;

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
Route::get('/about-us', [AboutController::class, 'index'])->name('about');
Route::get('/services', [PagesController::class, 'services'])->name('services');
Route::post('/contact-us', [ContactController::class, 'store'])->name('contact');
Route::get('/contact-us', [PagesController::class, 'contact'])->name('contact');
Route::get('/events', [PagesController::class, 'events'])->name('events');

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function(){
  Route::get('/', [EventController::class, 'index'])->name('admin_events');
  Route::get('/createEvent', function () { return view('dashboard.createEvent'); })->name('createEvent');
  Route::get('/editEvent/{event}', [EventController::class, 'edit'])->name('editEvent');
  Route::put('/editEvent/save/{event}', [EventController::class, 'update'])->name('updateEvent');
  Route::delete('/events/{event}', [EventController::class, 'destroy'])->name('deleteEvent');
});

Route::get('event',[EventController::class, 'create']);
Route::post('event',[EventController::class, 'store']);
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

require __DIR__.'/auth.php';

