<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\TechnicianController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AppointementController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use  App\Http\Controllers\AppointmentHistoryController;

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
})->name('welcome');


Route::Resource('cities', CityController::class);
Route::Resource('tech', TechnicianController::class);

Route::resource('appointments', AppointementController::class);

Route::resource('admins', AdminController::class);

Route::resource('appointment-histories', AppointmentHistoryController::class);

Route::get('cities/{city}/sort', [CityController::class, 'sort_by_city'])->name('cities.sort');

Route::Resource('services', ServiceController::class);

Route::Resource('reviews', ReviewController::class);

Route::resource('clients', ClientController::class);

//reserve appointment by service
Route::get('/appointments/service/{service}', [AppointementController::class, 'create'])->name('appointments.service');

//reserve appointment by technician
Route::get('/appointments/technician/{technician}', [AppointementController::class, 'reserveByTech'])->name('appointments.technician');


//confirm appointment
Route::put('appointments/{appointment}/confirm', [AppointementController::class, 'confirm'])->name('appointments.confirmation');






//profile routes 
Route::get('profile/{id}', [ProfileController::class, 'index'])->name('profile.index');
Route::put('profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('profile/delete/{id}', [ProfileController::class, 'destroy'])->name('profile.destroy');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
