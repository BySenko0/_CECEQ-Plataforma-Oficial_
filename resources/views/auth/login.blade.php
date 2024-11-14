<!-- resources/views/auth/login.blade.php -->
@extends('layouts.login_or_register')

@section('title', 'Login - SGD-CECEQ')

@section('content')
<div class="bg-white shadow-md rounded-lg p-10 max-w-md w-full space-y-6">
    <div class="flex justify-center mb-6 space-x-6">
        <span class="text-blue-700 border-b-2 border-blue-700 px-4 py-2">Ingresar</span>
        <a href="{{ route('registro.form') }}" class="text-blue-700 px-4 py-2 hover:underline">Registrar</a>
    </div>
    <h2 class="text-center text-2xl font-bold mb-4">INGRESAR</h2>
    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf
        <!-- Campos de login -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Correo</label>
            <input type="email" id="email" name="email" required
                   class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:ring-blue-500 focus:border-blue-500">
        </div>
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
            <input type="password" id="password" name="password" required
                   class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:ring-blue-500 focus:border-blue-500">
        </div>
        <button type="submit" class="w-full bg-blue-700 text-white py-3 rounded-lg hover:bg-blue-800">INGRESAR</button>
    </form>
</div>
@endsection
