<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ViewerController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiregiscontroller;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/dashboard', function () {
    return view('admin/dashboard');
});

// Middleware untuk otentikasi
Route::middleware(['auth'])->group(function () {

    // Redirect dashboard sesuai role
    Route::get('/dashboard', function () {
        $user = auth()->user(); // Gunakan auth()->user() daripada Auth::user()

        if ($user->role === 'admin') {
            return redirect()->route('admin.dashboard');
        } elseif ($user->role === 'viewer') {
            return redirect()->route('viewer.dashboard');
        }
        return abort(403);
    })->name('dashboard');

    // Hanya admin yang bisa mengakses
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    });

    // Hanya viewer yang bisa mengakses
    Route::middleware(['role:viewer'])->group(function () {
        Route::get('/viewer', [ViewerController::class, 'index'])->name('viewer.dashboard');
    });
});
Route::middleware(['auth'])->group(function () {
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    });
});
// Load routes untuk autentikasi
require __DIR__.'/auth.php';


