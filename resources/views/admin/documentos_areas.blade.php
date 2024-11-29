@extends('layouts.Navbar-Admin')

@section('content')

<!-- Contenido Principal -->
<div class="flex-1 p-6 overflow-y-auto">
    <!-- Título de área y botones -->
    <div class="flex justify-between items-center mt-4 border-b border-gray-300 pb-2">
        <h2 class="text-lg font-bold text-gray-800">Inicio / Área 1 / Documentos Históricos</h2>
        <div class="flex gap-4">
            <!-- Botón para eliminar seleccionados -->
            <button data-modal-target="deleteBatchModal" data-modal-toggle="deleteBatchModal" class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                <i class="fas fa-trash mr-2"></i>Eliminar Seleccionados
            </button>

            <!-- Botón de filtros -->
            <button data-modal-target="filterModal" data-modal-toggle="filterModal" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                <i class="fas fa-filter mr-2"></i>Filtros
            </button>
        </div>
    </div>

    <!-- Filtros Aplicados -->
    <div class="mt-4 flex flex-wrap gap-2">
        <div class="bg-blue-100 text-blue-800 text-sm font-medium px-3 py-1 rounded-full flex items-center">
            <span>Fecha Inicio: 2023-01-01</span>
            <button class="ml-2 text-blue-500 hover:text-blue-800 focus:outline-none">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="bg-blue-100 text-blue-800 text-sm font-medium px-3 py-1 rounded-full flex items-center">
            <span>Fecha Fin: 2023-12-31</span>
            <button class="ml-2 text-blue-500 hover:text-blue-800 focus:outline-none">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="bg-blue-100 text-blue-800 text-sm font-medium px-3 py-1 rounded-full flex items-center">
            <span>Tipo: Históricos</span>
            <button class="ml-2 text-blue-500 hover:text-blue-800 focus:outline-none">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>

    <!-- Sección de Documentos -->
    <div class="mt-6">
        <h3 class="text-xl font-bold text-gray-800 border-b border-gray-300 pb-2">Documentos de Área 1</h3>

        <!-- Grid de documentos -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mt-6">
            <!-- Documentos con selección -->
            @for ($i = 0; $i < 12; $i++)
            <div class="bg-white shadow-lg rounded-lg flex flex-col justify-between h-48 relative">
                <div class="p-4 flex justify-between items-center">
                    <p class="italic text-gray-700 font-bold text-lg">Doc {{ $i + 1 }}</p>
                    <!-- Checkbox para selección -->
                    <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600 rounded focus:ring-blue-500">
                </div>
                <div class="p-4">
                    <p class="text-sm text-gray-500">Fecha: {{ now()->subDays($i)->format('d/m/Y') }}</p>
                </div>
            </div>
            @endfor
        </div>
    </div>
</div>

<!-- Modal de Filtros -->
<div id="filterModal" tabindex="-1" aria-hidden="true" class="fixed inset-0 hidden bg-gray-900 bg-opacity-50 z-50 flex items-center justify-center">
    <div class="relative bg-white rounded-lg shadow w-96">
        <div class="flex justify-between items-center p-4 border-b rounded-t">
            <h3 class="text-xl font-medium text-gray-900">Filtros</h3>
            <button type="button" class="text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="filterModal">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <form class="p-6">
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
                    <option value="historico">Históricos</option>
                    <option value="subido">Subidos</option>
                </select>
            </div>
            <div class="flex justify-end gap-4">
                <button type="button" class="bg-gray-300 hover:bg-gray-400 text-gray-800 py-2 px-4 rounded-md" data-modal-hide="filterModal">
                    Cancelar
                </button>
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-md">
                    Aplicar
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Modal de Eliminar Seleccionados -->
<div id="deleteBatchModal" tabindex="-1" aria-hidden="true" class="fixed inset-0 hidden bg-gray-900 bg-opacity-50 z-50 flex items-center justify-center">
    <div class="relative bg-white rounded-lg shadow w-96">
        <div class="flex justify-between items-center p-4 border-b rounded-t">
            <h3 class="text-xl font-medium text-gray-900">Eliminar Documentos Seleccionados</h3>
            <button type="button" class="text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="deleteBatchModal">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="p-6">
            <p class="text-gray-700 mb-4">¿Estás seguro de que deseas eliminar los documentos seleccionados? Esta acción no se puede deshacer.</p>
            <div class="flex justify-end gap-4">
                <button type="button" class="bg-gray-300 hover:bg-gray-400 text-gray-800 py-2 px-4 rounded-md" data-modal-hide="deleteBatchModal">
                    Cancelar
                </button>
                <button type="button" onclick="confirmDeleteBatch()" class="bg-red-600 hover:bg-red-700 text-white py-2 px-4 rounded-md">
                    Eliminar
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    function confirmDeleteBatch() {
        alert('Documentos seleccionados eliminados.');
        // Aquí puedes agregar lógica para eliminar documentos seleccionados.
        const modal = document.getElementById('deleteBatchModal');
        modal.classList.add('hidden');
    }
    function openFilterModal() {
        document.getElementById('filterModal').classList.remove('hidden');
    }

    function closeFilterModal() {
        document.getElementById('filterModal').classList.add('hidden');
    }

    function openDeleteModal() {
        document.getElementById('deleteModal').classList.remove('hidden');
    }

    function closeDeleteModal() {
        document.getElementById('deleteModal').classList.add('hidden');
    }

    function openDeleteBatchModal() {
        document.getElementById('deleteBatchModal').classList.remove('hidden');
    }

    function closeDeleteBatchModal() {
        document.getElementById('deleteBatchModal').classList.add('hidden');
    }
</script>

@endsection
