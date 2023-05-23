<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PageController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::post('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('auth/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('auth/login', [AuthController::class, 'login']);
Route::get('auth/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('auth/register', [AuthController::class, 'register']);
Route::post('auth/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/rooms', [PageController::class, 'rooms']);
Route::get('/facilities', [PageController::class, 'facilities']);
Route::get('/availability', [PageController::class, 'availability']);