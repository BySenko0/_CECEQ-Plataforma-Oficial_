@extends('layouts.Navbar')

@section('title', 'Mi Perfil - SGD-CECEQ')

@section('content')
<div class="p-6 bg-light-blue min-h-screen">
    <!-- Encabezado -->
    <div class="bg-white shadow-md rounded-lg p-6">
        <div class="flex items-center justify-between">
            <h1 class="text-2xl font-bold text-gray-800">Mi Perfil</h1>
        </div>
    </div>

    <!-- Información del Perfil -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
        <!-- Tarjeta de Información -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-lg font-bold text-gray-800 mb-4">Información Personal</h2>
            <div class="space-y-2">
                <p><span class="font-bold text-gray-700">Nombre:</span> Juan Pérez</p>
                <p><span class="font-bold text-gray-700">Correo Electrónico:</span> juan.perez@example.com</p>
                <p><span class="font-bold text-gray-700">Teléfono:</span> +52 442 987 6543</p>
                <p><span class="font-bold text-gray-700">Rol:</span> Usuario Regular</p>
            </div>
        </div>

        <!-- Imagen de Perfil -->
        <div class="flex flex-col items-center bg-white shadow-lg rounded-lg p-6">
            <div class="w-32 h-32 rounded-full bg-gray-300 flex items-center justify-center overflow-hidden">
                <img src="https://via.placeholder.com/150" alt="Foto de perfil" class="object-cover">
            </div>
            <h2 class="mt-4 text-lg font-bold text-gray-800">USR12345</h2>
            <p class="text-gray-600">Usuario Regular</p>
        </div>
    </div>

    <!-- Configuración del Usuario -->
    <div class="mt-8 bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-lg font-bold text-gray-800 mb-4">Opciones</h2>
        <ul class="divide-y divide-gray-200">
            <li class="py-4 flex justify-between items-center">
                <span>Actualizar Información</span>
                <button data-modal-target="editProfileModal" data-modal-toggle="editProfileModal"
                        class="text-blue-600 hover:underline">Editar</button>
            </li>
            <li class="py-4 flex justify-between items-center">
                <span>Cambiar Contraseña</span>
                <a href="#" class="text-blue-600 hover:underline">Editar</a>
            </li>
        </ul>
    </div>
</div>

<!-- Modal de Edición del Perfil -->
<div id="editProfileModal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
    <div class="relative w-full max-w-md md:h-auto">
        <div class="bg-white rounded-lg shadow">
            <div class="flex justify-between items-center p-5 border-b rounded-t">
                <h3 class="text-xl font-bold text-gray-900">Editar Información</h3>
                <button type="button" data-modal-hide="editProfileModal" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="p-6 space-y-4">
                <form method="POST" action="#">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                        <input type="text" id="name" name="name" value="Juan Pérez"
                            class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                        <input type="email" id="email" name="email" value="juan.perez@example.com"
                            class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700">Teléfono</label>
                        <input type="text" id="phone" name="phone" value="+52 442 987 6543"
                            class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg">
                        Guardar Cambios
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
