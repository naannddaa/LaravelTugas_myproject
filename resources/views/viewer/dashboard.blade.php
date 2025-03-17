@extends('layouts.app')

@section('content')
    <h1>Viewer Dashboard</h1>
    <p>Selamat datang, {{ Auth::user()->name }}! Anda adalah viewer.</p>
@endsection
