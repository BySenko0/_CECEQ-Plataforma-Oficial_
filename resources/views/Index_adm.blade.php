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

  <div class="flex h-[calc(100vh-56px)] overflow-hidden">
    <!-- Sidebar Izquierda -->
    <div class="w-1/5 bg-gray-100 shadow-lg p-4 border-r border-black overflow-y-auto">
      <div class="text-center mb-6 border-b pb-4 border-gray-300">
        <div class="bg-gray-300 w-16 h-16 rounded-full mx-auto"></div>
        <h3 class="text-lg font-semibold mt-2 text-gray-800">MDG2309AC</h3>
        <p class="text-gray-700">Abraham Perez Navor</p>
        <p class="text-gray-500">Administrador</p>
      </div>
      <nav>
        <ul>
          <li class="py-2"><a href="#" class="text-blue-700 font-semibold flex items-center"><i class="fas fa-home mr-2"></i>Inicio</a></li>
          <li class="py-2"><a href="#" class="text-gray-700 flex items-center"><i class="fas fa-user mr-2"></i>Mi información</a></li>
          <li class="py-2">
            <p class="text-gray-700">Áreas</p>
            <ul class="pl-4 mt-2 space-y-1">
              <li class="flex items-center">
                <a href="{{ route('Areas.form') }}" class="text-gray-500 flex items-center">
                  <i class="fas fa-circle mr-2 text-xs"></i> Área 1
                </a>
              </li>
              <li class="flex items-center">
                <a href="{{ route('Areas.form') }}" class="text-gray-500 flex items-center">
                  <i class="fas fa-circle mr-2 text-xs"></i> Área 2
                </a>
              </li>
              <li class="flex items-center">
                <a href="{{ route('Areas.form') }}" class="text-gray-500 flex items-center">
                  <i class="fas fa-circle mr-2 text-xs"></i> Área 3
                </a>
              </li>
              <li class="flex items-center">
                <a href="{{ route('Areas.form') }}" class="text-gray-500 flex items-center">
                  <i class="fas fa-circle mr-2 text-xs"></i> Área 4
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>


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
