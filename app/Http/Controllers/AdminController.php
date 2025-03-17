<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

// class AdminController extends Controller
// {
//     public function index()
//     {
//         // Pastikan user sudah login
//         if (!Auth::check()) {
//             return redirect('/login')->withErrors(['message' => 'Silakan login terlebih dahulu.']);
//         }

//         $user = Auth::user();

//         // Pastikan user adalah admin
//         if ($user->role !== 'admin') {
//             abort(403, 'Anda tidak memiliki izin untuk mengakses halaman ini.');
//         }

//         return view('admin.dashboard', compact('user'));
//     }
// }
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard'); // Pastikan file Blade ada di resources/views/admin/dashboard.blade.php
    }
}
