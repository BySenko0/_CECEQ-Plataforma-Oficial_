<!-- resources/views/auth/register.blade.php -->
@extends('layouts.login_or_register')

@section('title', 'Registro - SGD-CECEQ')

@section('content')
<div class="bg-white shadow-md rounded-lg p-10 max-w-md w-full space-y-6">
    <div class="flex justify-center mb-6 space-x-6">
        <a href="{{ route('login.form') }}" class="text-blue-700 px-4 py-2 hover:underline">Ingresar</a>
        <span class="text-blue-700 border-b-2 border-blue-700 px-4 py-2">Registrar</span>
    </div>
    <h2 class="text-center text-2xl font-bold mb-4">REGISTRARSE</h2>
    <form method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf
        <!-- Campos de registro -->
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
            <input type="text" id="name" name="name" required
                   class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:ring-blue-500 focus:border-blue-500">
        </div>
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
        <div>
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirmar Contraseña</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required
                   class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:ring-blue-500 focus:border-blue-500">
        </div>
        <button type="submit" class="w-full bg-blue-700 text-white py-3 rounded-lg hover:bg-blue-800">REGISTRARSE</button>
    </form>
</div>
@endsection
