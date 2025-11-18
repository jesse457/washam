<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

// Public routes
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/services', function () {
    return view('services');
})->name('services');



Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/authlogin', [LoginController::class, 'login']);

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/authregister', [RegisteredUserController::class, 'store']);



// Profile (user protected)
Route::middleware('auth')->group(function () {
    Route::get('/profile/edit', function () {
        return view('profile.edit');
    })->name('profile.edit');

    Route::post('/logout', [LoginController::class, 'logout'])
        ->middleware('auth')
        ->name('logout');
});


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/admin/settings', [AdminController::class, 'settings'])->name('admin.settings');
    Route::get('/admin/customers', [AdminController::class, 'customers'])->name('admin.customers');
    Route::get('/admin/orders', [AdminController::class, 'orders'])->name('admin.orders');
    Route::get('/admin/services', [AdminController::class, 'services'])->name('admin.services');
});
