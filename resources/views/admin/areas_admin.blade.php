@extends('layouts.Navbar-Admin')

@section('title', 'Areas')

@section('content')

<!-- Contenido principal -->
<div class="flex-1 p-6 overflow-y-auto">
    <!-- Encabezado -->
    <div class="flex justify-between items-center mt-4 border-b border-gray-300 pb-2">
        <h2 class="text-lg font-bold text-gray-800">Inicio / Área 1</h2>
        <button onclick="openFilterModal()" class="text-gray-700 text-xl flex items-center gap-2 px-4 py-2 bg-gray-200 hover:bg-gray-300 rounded-lg">
            <i class="fas fa-filter"></i>
            <span>Filtros</span>
        </button>
    </div>

    <!-- Documentos -->
    <div class="mt-6">
        <h3 class="text-xl font-bold text-gray-800 border-b border-gray-300 pb-2">Documentos</h3>

        <!-- Sección: Últimos documentos subidos -->
        <div class="mt-4">
            <h4 class="text-lg font-semibold text-gray-800 mb-4">Últimos documentos subidos</h4>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                @for ($i = 0; $i < 4; $i++)
                <div class="bg-white shadow-lg rounded-lg flex flex-col justify-between h-48 relative">
                    <div class="p-4">
                        <p class="italic text-gray-700 font-bold text-lg">Documento {{ $i + 1 }}</p>
                        <p class="text-sm text-gray-500">Subido: {{ now()->format('d/m/Y') }}</p>
                    </div>
                    <button onclick="openDeleteModal()" class="absolute bottom-2 right-2 text-gray-600 hover:text-red-500 transition-colors">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
                @endfor
                <div onclick="openUploadModal()" class="bg-blue-600 hover:bg-blue-700 text-white rounded-lg flex items-center justify-center h-48 cursor-pointer shadow-md">
                    <i class="fas fa-plus text-3xl"></i>
                    <p class="ml-2 font-semibold">Agregar Documento</p>
                </div>
            </div>
        </div>

        <!-- Sección: Documentos en Proceso -->
        <div class="mt-8">
            <h4 class="text-lg font-semibold text-gray-800 mb-4">Documentos en Proceso</h4>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                @for ($i = 0; $i < 4; $i++)
                <div class="bg-white shadow-lg rounded-lg flex flex-col justify-between h-48 relative">
                    <div class="p-4">
                        <p class="italic text-gray-700 font-bold text-lg">Documento {{ $i + 1 }}</p>
                        <p class="text-sm text-gray-500">En proceso desde: {{ now()->subDays($i)->format('d/m/Y') }}</p>
                    </div>
                    <button onclick="openDeleteModal()" class="absolute bottom-2 right-2 text-gray-600 hover:text-red-500 transition-colors">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
                @endfor
            </div>
        </div>

        <!-- Sección: Documentos Históricos -->
        <div class="mt-8">
            <h4 class="text-lg font-semibold text-gray-800 mb-4">Documentos Históricos</h4>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                @for ($i = 0; $i < 4; $i++)
                <div class="bg-white shadow-lg rounded-lg flex flex-col justify-between h-48 relative">
                    <div class="p-4">
                        <p class="italic text-gray-700 font-bold text-lg">Documento {{ $i + 1 }}</p>
                        <p class="text-sm text-gray-500">Creado: {{ now()->subMonths($i + 1)->format('d/m/Y') }}</p>
                    </div>
                    <button onclick="openDeleteModal()" class="absolute bottom-2 right-2 text-gray-600 hover:text-red-500 transition-colors">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
                @endfor
            </div>
        </div>
    </div>
</div>


<!-- Modales -->
<!-- Modal de Confirmación -->
<div id="deleteModal" tabindex="-1" class="fixed inset-0 hidden bg-gray-900 bg-opacity-50 z-50 flex items-center justify-center">
    <div class="bg-white rounded-lg shadow p-6 w-80">
        <h3 class="text-lg font-bold text-gray-800 mb-4">¿Eliminar este documento?</h3>
        <div class="flex justify-between">
            <button onclick="confirmDelete()" class="bg-red-600 hover:bg-red-700 text-white py-2 px-4 rounded-md">
                Eliminar
            </button>
            <button onclick="closeDeleteModal()" class="bg-gray-300 hover:bg-gray-400 text-gray-800 py-2 px-4 rounded-md">
                Cancelar
            </button>
        </div>
    </div>
</div>

<!-- Modal de Subida -->
<div id="uploadModal" tabindex="-1" class="fixed inset-0 hidden bg-gray-900 bg-opacity-50 z-50 flex items-center justify-center">
    <div class="bg-white rounded-lg shadow p-6 w-96">
        <h3 class="text-lg font-bold text-gray-800 mb-4">Subir Documento</h3>
        <p class="text-sm text-gray-500">Selecciona un archivo PDF no mayor a 100 MB.</p>
        <input type="file" accept=".pdf" class="mt-4 block w-full border-gray-300 rounded-lg">
        <div class="flex justify-between mt-4">
            <button onclick="confirmUpload()" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-md">
                Subir
            </button>
            <button onclick="closeUploadModal()" class="bg-gray-300 hover:bg-gray-400 text-gray-800 py-2 px-4 rounded-md">
                Cancelar
            </button>
        </div>
    </div>
</div>

<!-- Modal de Filtros -->
<div id="filterModal" tabindex="-1" class="fixed inset-0 hidden bg-gray-900 bg-opacity-50 z-50 flex items-center justify-center">
    <div class="bg-white rounded-lg shadow p-6 w-96">
        <h3 class="text-lg font-bold text-gray-800 mb-4">Filtros</h3>
        <form>
            <div class="mb-4">
                <label for="dateStart" class="block text-sm font-medium text-gray-700">Fecha Inicio</label>
                <input type="date" id="dateStart" class="block w-full mt-1 border-gray-300 rounded-lg">
            </div>
            <div class="mb-4">
                <label for="dateEnd" class="block text-sm font-medium text-gray-700">Fecha Fin</label>
                <input type="date" id="dateEnd" class="block w-full mt-1 border-gray-300 rounded-lg">
            </div>
            <div class="mb-4">
                <label for="documentType" class="block text-sm font-medium text-gray-700">Tipo de Documento</label>
                <select id="documentType" class="block w-full mt-1 border-gray-300 rounded-lg">
                    <option value="">Todos</option>
                    <option value="subido">Subidos</option>
                    <option value="proceso">En Proceso</option>
                    <option value="historico">Históricos</option>
                </select>
            </div>
            <div class="flex justify-end gap-4">
                <button type="button" onclick="closeFilterModal()" class="bg-gray-300 hover:bg-gray-400 text-gray-800 py-2 px-4 rounded-md">
                    Cancelar
                </button>
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-md">
                    Aplicar
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    // Funciones para abrir y cerrar modales
    function openDeleteModal() {
        document.getElementById('deleteModal').classList.remove('hidden');
    }

    function closeDeleteModal() {
        document.getElementById('deleteModal').classList.add('hidden');
    }

    function openUploadModal() {
        document.getElementById('uploadModal').classList.remove('hidden');
    }

    function closeUploadModal() {
        document.getElementById('uploadModal').classList.add('hidden');
    }

    function openFilterModal() {
        document.getElementById('filterModal').classList.remove('hidden');
    }

    function closeFilterModal() {
        document.getElementById('filterModal').classList.add('hidden');
    }
</script>

@endsection
