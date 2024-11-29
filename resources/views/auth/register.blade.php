@extends('layouts.login_or_register')

@section('title', 'Registro - SGD-CECEQ')

@section('content')
<div class="bg-white shadow-xl rounded-lg p-8 w-full max-w-sm md:max-w-md lg:max-w-lg">
    <!-- Navegación entre Login y Registro -->
    <div class="flex justify-between border-b pb-4 mb-6">
        <a href="{{ route('login.form') }}" class="text-gray-600 font-bold text-lg hover:text-blue-600 transition">Ingresar</a>
        <a href="#" class="text-blue-600 font-bold text-lg border-b-2 border-blue-600 hover:text-blue-800 transition">Registrar</a>
    </div>

    <!-- Título -->
    <h2 class="text-center text-2xl font-bold mb-4">REGISTRARSE</h2>

    <!-- Formulario de Registro -->
    <form method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf
        <!-- Campo Nombre -->
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
            <input type="text" id="name" name="name" required
                   placeholder="Tu nombre completo"
                   class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
        </div>

        <!-- Campo Correo -->
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Correo</label>
            <input type="email" id="email" name="email" required
                   placeholder="correo@example.com"
                   class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
        </div>

        <!-- Campo Contraseña -->
        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
            <input type="password" id="password" name="password" required
                   placeholder="••••••••"
                   class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
        </div>

        <!-- Campo Confirmar Contraseña -->
        <div class="mb-6">
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirmar Contraseña</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required
                   placeholder="••••••••"
                   class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
        </div>

        <!-- Botón Registrarse -->
        <div>
            <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition">
                REGISTRARSE
            </button>
        </div>
    </form>
</div>
@endsection
