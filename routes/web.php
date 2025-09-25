<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Symfony\Component\HttpKernel\Profiler\Profile;

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

Route::get('/', [EventController::class, 'index'])->name('home');

// Auth routes
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Profile
Route::get('/edit', [ProfileController::class, 'edit'])->name('edit')->middleware('auth');
Route::post('/edit', [ProfileController::class, 'update'])->name('edit.update');

// Admin-only routes
Route::middleware(['auth', 'admin'])->group(function() {
    Route::get('/create', [EventController::class, 'create'])->name('create');
    Route::post('/create', [EventController::class, 'store'])->name('store');
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    Route::get('/events/{event}/edit', [EventController::class, 'edit'])->name('events.edit');
    Route::put('/events/{event}', [EventController::class, 'update'])->name('events.update');
    Route::delete('/events/{event}', [EventController::class, 'destroy'])->name('events.destroy');
    Route::get('/events/{event}/participants', [AdminController::class, 'showParticipants'])->name('participants');
});

// User routes
Route::middleware('auth')->group(function() {
    Route::get('/myevents', [EventController::class,'myEvents'])->name('myevents');
    Route::post('/events/{event}/toggle-participation', [EventController::class, 'toggleParticipation'])->name('events.toggle');
});

// Search events
Route::get('/eventscard', [EventController::class, 'search'])->name('eventscard.search');

Route::get('/aboutus', [HomeController::class, 'showaboutus'])->name('showaboutus');