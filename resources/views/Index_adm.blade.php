<!-- resources/views/inicio.blade.php -->
@extends('layouts.Navbar')

@section('title', 'Inicio')

@section('content')
<div class="p-6">
    <!-- Mensaje de Bienvenida -->
    <h1 class="text-xl font-bold mb-4">Bienvenido(a) ABRAHAM PEREZ</h1>
    <hr class="mb-4">
    <p class="text-center text-lg italic mb-8">
        "Bienvenido al portal del CECEQ, donde podrás visualizar documentos e información sobre el estatus de los trámites que lleves a cabo."
    </p>

    <!-- Sección de Áreas -->
    <h2 class="text-center text-lg font-semibold mb-4">Áreas</h2>
    <div class="grid grid-cols-4 gap-4 justify-center">
        <div class="bg-gray-300 p-10 flex items-center justify-center rounded-lg">
            <span class="text-gray-700 font-bold transform -rotate-6">Area 1</span>
        </div>
        <div class="bg-gray-300 p-10 flex items-center justify-center rounded-lg">
            <span class="text-gray-700 font-bold transform -rotate-6">Area 2</span>
        </div>
        <div class="bg-gray-300 p-10 flex items-center justify-center rounded-lg">
            <span class="text-gray-700 font-bold transform -rotate-6">Area 3</span>
        </div>
        <div class="bg-gray-300 p-10 flex items-center justify-center rounded-lg">
            <span class="text-gray-700 font-bold transform -rotate-6">Area 4</span>
        </div>
    </div>
</div>
@endsection
