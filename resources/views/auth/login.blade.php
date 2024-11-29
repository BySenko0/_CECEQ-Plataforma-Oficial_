<!-- resources/views/auth/login.blade.php -->
@extends('layouts.login_or_register')

@section('title', 'Login - SGD-CECEQ')

@section('content')
<div class="bg-white shadow-xl rounded-lg p-8 w-full max-w-sm md:max-w-md lg:max-w-lg">
    <!-- Navegación entre Login y Registro -->
    <div class="flex justify-between border-b pb-4 mb-6">
        <a href="#" class="text-blue-600 font-bold text-lg border-b-2 border-blue-600 hover:text-blue-800 transition">Ingresar</a>
        <a href="{{ route('registro.form') }}" class="text-gray-600 font-bold text-lg hover:text-blue-600 transition">Registrar</a>
    </div>
    <h2 class="text-center text-2xl font-bold mb-4">INGRESAR</h2>
    
    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf
        <!-- Campos de login -->
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Correo</label>
            <input type="email" id="email" name="email" placeholder="correo@example.com" class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
        </div>
        <div class="mb-6">
            <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
            <input type="password" id="password" name="password" placeholder="••••••••" class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
        </div>
        <div class="mb-4">
            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition">
            INGRESAR
            </button>
        </div>
        <div class="text-center">
            <a href="{{ route('password.request') }}" class="text-blue-600 text-sm hover:underline">¿Olvidaste tu contraseña?</a>
        </div>
    </form>
</div>
@endsection
 

          