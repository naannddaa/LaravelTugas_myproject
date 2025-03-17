<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\regismobile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ApiRegisTugasController extends Controller
{
    public function register (Request $request)
    {
        //validasi input
        $validasi = Validator::make($request->all(), [
            'nama_lengkap' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',
            'date' => 'required|string',
            'gender' => 'required|string',
            'no_hp' => 'required|string',
            'alamat' => 'required|string',
        ]);
        if ($validasi->fails()) {
            return response()->json($validasi->errors(), 400);
        }
        //menyimpan data ke database
        $user = regismobile::create([
            'nama_lengkap' => $request->nama_lengkap,
            'username' => $request-> username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'date' => $request->date,
            'gender' => $request->gender,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
        ]);
        return response()->json(['message' => 'berhasil regis', 'regismobile' => $user], 201);
    }
}
