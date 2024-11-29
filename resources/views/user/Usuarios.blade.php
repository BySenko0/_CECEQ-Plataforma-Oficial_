@extends('layouts.Navbar')

@section('content')
    <div class="flex justify-between items-center mt-4 border-b border-gray-300 pb-2">
      <h2 class="text-lg font-bold text-gray-800">Inicio / Mis Documentos</h2>
    </div>

    <!-- Sección de Documentos -->
    <div class="mt-6">
      <h3 class="text-xl font-bold text-gray-800 border-b border-gray-300 pb-2">Documentos</h3>

      <!-- Últimos documentos subidos -->
      <div class="mt-6">
        <h4 class="text-lg font-semibold text-gray-800 mb-4">Últimos documentos subidos</h4>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
          <div class="bg-gray-200 p-6 flex items-center justify-center h-64 w-full rounded-lg shadow-md">
            <p class="text-center font-bold text-gray-700">Doc 1</p>
          </div>
          <div class="bg-gray-200 p-6 flex items-center justify-center h-64 w-full rounded-lg shadow-md">
            <p class="text-center font-bold text-gray-700">Doc 2</p>
          </div>
          <div class="bg-gray-200 p-6 flex items-center justify-center h-64 w-full rounded-lg shadow-md">
            <p class="text-center font-bold text-gray-700">Doc 3</p>
          </div>
          <div class="bg-gray-200 p-6 flex items-center justify-center h-64 w-full rounded-lg shadow-md">
            <p class="text-center font-bold text-gray-700">Doc 4</p>
          </div>
        </div>
      </div>

      <!-- Documentos Compartidos -->
      <div class="mt-6">
        <h4 class="text-lg font-semibold text-gray-800 mb-4">Documentos Compartidos</h4>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
          <div class="bg-gray-200 p-6 flex items-center justify-center h-64 w-full rounded-lg shadow-md">
            <p class="text-center font-bold text-gray-700">Doc 1</p>
          </div>
          <div class="bg-gray-200 p-6 flex items-center justify-center h-64 w-full rounded-lg shadow-md">
            <p class="text-center font-bold text-gray-700">Doc 2</p>
          </div>
          <div class="bg-gray-200 p-6 flex items-center justify-center h-64 w-full rounded-lg shadow-md">
            <p class="text-center font-bold text-gray-700">Doc 3</p>
          </div>
          <div class="bg-gray-200 p-6 flex items-center justify-center h-64 w-full rounded-lg shadow-md">
            <p class="text-center font-bold text-gray-700">Doc 4</p>
          </div>
        </div>
      </div>

      <!-- Historial de Documentos -->
      <div class="mt-6">
        <h4 class="text-lg font-semibold text-gray-800 mb-4">Historial de Documentos</h4>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
          <div class="bg-gray-200 p-6 flex items-center justify-center h-64 w-full rounded-lg shadow-md">
            <p class="text-center font-bold text-gray-700">Doc 1</p>
          </div>
          <div class="bg-gray-200 p-6 flex items-center justify-center h-64 w-full rounded-lg shadow-md">
            <p class="text-center font-bold text-gray-700">Doc 2</p>
          </div>
          <div class="bg-gray-200 p-6 flex items-center justify-center h-64 w-full rounded-lg shadow-md">
            <p class="text-center font-bold text-gray-700">Doc 3</p>
          </div>
          <div class="bg-gray-200 p-6 flex items-center justify-center h-64 w-full rounded-lg shadow-md">
            <p class="text-center font-bold text-gray-700">Doc 4</p>
          </div>
        </div>
      </div>
    </div>
@endsection
