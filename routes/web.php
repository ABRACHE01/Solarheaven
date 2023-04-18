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
use App\Http\Controllers\LandingController;
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

Route::get('/', [LandingController::class,'index'])->name('welcome');


Route::Resource('cities', CityController::class);
Route::Resource('tech', TechnicianController::class);


Route::Resource('appointments', AppointementController::class);



Route::Resource('admins', AdminController::class);


Route::get('cities/{city}/sort', [CityController::class, 'sort_by_city'])->name('cities.sort');

Route::Resource('services', ServiceController::class);

Route::Resource('reviews', ReviewController::class);

Route::resource('clients', ClientController::class);

//reserve appointment by service
Route::get('/appointments/service/{service}', [AppointementController::class, 'create'])->name('appointments.service');

//reserve appointment by technician
Route::get('/appointments/technician/{technician}', [AppointementController::class, 'reserveByTech'])->name('appointments.technician');


//payment routes
Route::get('/payment', [App\Http\Controllers\PaymentController::class, 'index'])->name('payment.index');

//make review
Route::get('/reviews/create/{appointment}', [ReviewController::class, 'create'])->name('take.review');

//canceled appointment
Route::get('/canceled', [AppointementController::class, 'canceled'])->name('appointments.canceled');

//profile routes 
Route::get('profile/{id}', [ProfileController::class, 'index'])->name('profile.index');
Route::put('profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('profile/delete/{id}', [ProfileController::class, 'destroy'])->name('profile.destroy');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
