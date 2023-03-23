<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\TechnicianController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AppointementController;


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

Route::get('/', function () {
    return view('welcome');
});



Route::Resource('cities', CityController::class);
Route::Resource('tech', TechnicianController::class);

Route::resource('appointments', AppointementController::class);



Route::get('cities/{city}/sort', [CityController::class, 'sort_by_city']);

Route::Resource('services', ServiceController::class);

Route::Resource('reviews', ReviewController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
