<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RoomtypeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\BookingController;

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

// Admin login
Route::get('/admin/login', [AdminController::class, 'login']);
Route::post('/admin/login', [AdminController::class, 'check_login']);
Route::get('/admin/logout', [AdminController::class, 'logout']);


// Admin Dashboard
Route::get('/admin', function(){
    return view('admin.admin');
});

//user dashboard
Route::post('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Booking
Route::get('/booking/{room}', [BookingController::class, 'index'])->name('booking');
Route::post('/booking/{room}', [BookingController::class, 'store'])->name('booking.store');
Route::get('/confirmation/{booking}', [BookingController::class, 'confirmation'])->name('confirmation');



//login
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/rooms', [PageController::class, 'rooms']);
Route::get('/facilities', [PageController::class, 'facilities']);
Route::get('/availability', [PageController::class, 'availability']);

//admin roomtype route
Route::get('/admin/roomtype/{id}/delete', [RoomtypeController::class, 'destroy']);
Route::resource('/admin/roomtype', RoomtypeController::class);

//admin room route
Route::get('/admin/rooms/{id}/delete', [RoomController::class, 'destroy']);
Route::resource('/admin/rooms', RoomController::class);

//admin customer route
Route::get('/admin/customer/{id}/delete', [CustomerController::class, 'destroy']);
Route::resource('/admin/customer', CustomerController::class);