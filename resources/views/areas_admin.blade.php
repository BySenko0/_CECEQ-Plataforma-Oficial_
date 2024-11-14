<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vista de Documentos</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Font Awesome para los iconos -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100 font-sans">

  <!-- Barra superior azul de extremo a extremo -->
  <div class="bg-gradient-to-r from-blue-900 to-blue-600 text-white py-3 px-6 flex justify-between items-center shadow-md border-b-4 border-black">
    <div class="flex items-center space-x-4">
      <!-- Simulación de logo con texto -->
      <div class="text-sm border-r border-gray-300 pr-4">
        <p class="font-light leading-tight">Centro Educativo y Cultural del Estado</p>
        <p class="font-bold leading-tight">GÓMEZ MORIN</p>
      </div>
      <!-- Texto de título central -->
      <h2 class="text-2xl font-bold tracking-wide">CECEQ <span class="font-light italic">SGD-CECEQ</span></h2>
    </div>
    <!-- Icono de flecha para cerrar sesión o acción -->
    <button  class="text-2xl"><i class="fas fa-sign-out-alt"></i></button>
  </div>

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

    <!-- Contenido Principal con scroll vertical para documentos -->
    <div class="flex-1 p-6 bg-white border-l border-black overflow-y-auto">
      <!-- Título de área y icono de filtro -->
      <div class="flex justify-between items-center mt-4 border-b border-gray-300 pb-2">
        <h2 class="text-lg font-bold text-gray-800">Inicio / Área 1</h2>
        <!-- Icono de filtro -->
        <button onclick="toggleFilterModal()" class="text-gray-700 text-xl"><i class="fas fa-filter"></i></button>
      </div>

      <!-- Sección de Documentos -->
      <div class="mt-6">
        <h3 class="text-xl font-bold text-gray-800 border-b border-gray-300 pb-2">Documentos</h3>

        <!-- Últimos documentos subidos -->
        <div class="mt-4">
          <h4 class="text-lg font-semibold text-gray-800 mb-2">Últimos documentos subidos</h4>
          <div class="grid grid-cols-4 gap-4">
            <div class="bg-gray-200 p-4 relative flex items-center justify-center h-56 w-3/4 rounded-lg">
              <p class="text-center font-bold text-gray-700">Doc</p>
              <button onclick="toggleModal()" class="absolute bottom-3 right-3 text-gray-600 hover:text-red-500 transition-colors">
                <i class="fas fa-trash"></i>
              </button>
            </div>
            <div class="bg-gray-200 p-4 relative flex items-center justify-center h-56 w-3/4 rounded-lg">
              <p class="text-center font-bold text-gray-700">Doc</p>
              <button onclick="toggleModal()" class="absolute bottom-3 right-3 text-gray-600 hover:text-red-500 transition-colors">
                <i class="fas fa-trash"></i>
              </button>
            </div>
            <div class="bg-gray-200 p-4 relative flex items-center justify-center h-56 w-3/4 rounded-lg">
              <p class="text-center font-bold text-gray-700">Doc</p>
              <button onclick="toggleModal()" class="absolute bottom-3 right-3 text-gray-600 hover:text-red-500 transition-colors">
                <i class="fas fa-trash"></i>
              </button>
            </div>
            <!-- Botón para agregar documento que abre el modal de carga -->
            <div onclick="toggleUploadModal()" class="bg-blue-500 p-4 text-center text-white font-bold text-2xl cursor-pointer flex justify-center items-center rounded-lg h-56 w-3/4 hover:bg-blue-600 transition">
              <i class="fas fa-plus"></i>
            </div>
          </div>
        </div>

        <!-- Documentos en Proceso -->
        <div class="mt-6">
          <h4 class="text-lg font-semibold text-gray-800 mb-2">Documentos en Proceso</h4>
          <div class="grid grid-cols-4 gap-4">
            <div class="bg-gray-200 p-4 relative flex items-center justify-center h-56 w-3/4 rounded-lg">
              <p class="text-center font-bold text-gray-700">Doc</p>
              <button onclick="toggleModal()" class="absolute bottom-3 right-3 text-gray-600 hover:text-red-500 transition-colors">
                <i class="fas fa-trash"></i>
              </button>
            </div>
            <div class="bg-gray-200 p-4 relative flex items-center justify-center h-56 w-3/4 rounded-lg">
              <p class="text-center font-bold text-gray-700">Doc</p>
              <button onclick="toggleModal()" class="absolute bottom-3 right-3 text-gray-600 hover:text-red-500 transition-colors">
                <i class="fas fa-trash"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Documentos Históricos -->
        <div class="mt-6">
          <h4 class="text-lg font-semibold text-gray-800 mb-2">Documentos Históricos</h4>
          <div class="grid grid-cols-4 gap-4">
            <div class="bg-gray-200 p-4 relative flex items-center justify-center h-56 w-3/4 rounded-lg">
              <p class="text-center font-bold text-gray-700">Doc</p>
              <button onclick="toggleModal()" class="absolute bottom-3 right-3 text-gray-600 hover:text-red-500 transition-colors">
                <i class="fas fa-trash"></i>
              </button>
            </div>
            <div class="bg-gray-200 p-4 relative flex items-center justify-center h-56 w-3/4 rounded-lg">
              <p class="text-center font-bold text-gray-700">Doc</p>
              <button onclick="toggleModal()" class="absolute bottom-3 right-3 text-gray-600 hover:text-red-500 transition-colors">
                <i class="fas fa-trash"></i>
              </button>
            </div>
            <div class="bg-gray-200 p-4 relative flex items-center justify-center h-56 w-3/4 rounded-lg">
              <p class="text-center font-bold text-gray-700">Doc</p>
              <button onclick="toggleModal()" class="absolute bottom-3 right-3 text-gray-600 hover:text-red-500 transition-colors">
                <i class="fas fa-trash"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal de confirmación de eliminación -->
  <div id="deleteModal" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
    <div class="bg-gray-200 rounded-lg p-6 w-80 shadow-lg">
      <div class="flex justify-end">
        <button onclick="toggleModal()" class="text-gray-500 text-lg font-bold">&times;</button>
      </div>
      <p class="text-center text-lg font-semibold text-gray-800 mb-4">¿Eliminar este Documento?</p>
      <div class="flex justify-around mt-4">
        <button onclick="deleteDocument()" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-full">
          ✓
        </button>
        <button onclick="toggleModal()" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-full">
          ✕
        </button>
      </div>
    </div>
  </div>

  <!-- Modal de carga de documentos -->
  <div id="uploadModal" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
    <div class="bg-gray-200 rounded-lg p-6 w-96 shadow-lg">
      <div class="flex justify-between items-center mb-4">
        <h3 class="text-xl font-bold text-gray-800">Carga de Documentos</h3>
        <button onclick="toggleUploadModal()" class="text-gray-500 text-lg font-bold">&times;</button>
      </div>
      <div class="border-2 border-gray-400 rounded-lg p-4 text-center">
        <i class="fas fa-upload text-3xl text-gray-500 mb-2"></i>
        <p class="text-gray-700">Subir un archivo en PDF no mayor a 100 MB.</p>
        <input type="file" accept=".pdf" class="mt-4 block w-full text-gray-700" />
      </div>
      <div class="flex justify-around mt-4">
        <button onclick="uploadDocument()" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-full">
          ✓
        </button>
        <button onclick="toggleUploadModal()" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-full">
          ✕
        </button>
      </div>
    </div>
  </div>

  <!-- Modal de filtros -->
  <div id="filterModal" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
    <div class="bg-gray-300 rounded-lg p-6 w-96 shadow-lg">
      <h3 class="text-xl font-bold text-gray-800 mb-4">Filtros</h3>
      <div class="mb-4">
        <p class="font-semibold text-gray-800">Tipos de Archivos</p>
        <div class="flex items-center mb-2">
          <input type="checkbox" class="mr-2">
          <label>Tramite</label>
        </div>
        <div class="flex items-center mb-2">
          <input type="checkbox" class="mr-2">
          <label>Proceso</label>
        </div>
        <div class="flex items-center mb-2">
          <input type="checkbox" class="mr-2">
          <label>Antiguedad</label>
        </div>
      </div>
      <div class="mb-4">
        <p class="font-semibold text-gray-800">Fechas de Archivos</p>
        <label class="block text-gray-700">Fecha de Inicio</label>
        <input type="date" class="w-full mb-2 p-2 border rounded">
        <label class="block text-gray-700">Fecha de Fin</label>
        <input type="date" class="w-full p-2 border rounded">
      </div>
      <div class="flex justify-end">
        <button onclick="toggleFilterModal()" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full">Aplicar</button>
      </div>
    </div>
  </div>


  <!-- JavaScript para mostrar/ocultar modales -->
  <script>
    function toggleModal() {
      const modal = document.getElementById('deleteModal');
      modal.classList.toggle('hidden');
    }

    function deleteDocument() {
      // Aquí puedes añadir la lógica para eliminar el documento
      console.log('Documento eliminado');
      toggleModal(); // Cierra el modal después de confirmar
    }

    function toggleUploadModal() {
      const modal = document.getElementById('uploadModal');
      modal.classList.toggle('hidden');
    }

    function uploadDocument() {
      // Aquí puedes añadir la lógica para subir el documento
      console.log('Documento cargado');
      toggleUploadModal(); // Cierra el modal después de la carga
    }

    function toggleFilterModal() {
      const modal = document.getElementById('filterModal');
      modal.classList.toggle('hidden');
    }
  </script>

</body>
</html>
