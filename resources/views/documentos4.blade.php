<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subir Documentos</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100 font-sans">

  <!-- Top bar with gradient and document upload title -->
  <div class="bg-gradient-to-r from-blue-900 to-blue-600 text-white py-3 px-6 flex justify-between items-center shadow-md border-b-4 border-black">
    <div class="flex items-center space-x-4">
      <!-- Simulated logo with text -->
      <div class="text-sm border-r border-gray-300 pr-4">
        <p class="font-light leading-tight">Centro Educativo y Cultural del Estado</p>
        <p class="font-bold leading-tight">GÓMEZ MORIN</p>
      </div>
      <!-- Central title text -->
      <h2 class="text-2xl font-bold tracking-wide">CECEQ <span class="font-light italic">SGD-CECEQ</span></h2>
    </div>
    <!-- Icon for session or action -->
    <button class="text-2xl"><i class="fas fa-sign-out-alt"></i></button>
  </div>

  <div class="flex h-[calc(100vh-56px)] overflow-hidden">
    <!-- Left Sidebar -->
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
              <li class="flex items-center text-blue-700"><i class="fas fa-circle mr-2 text-xs"></i>Area 1</li>
              <li class="flex items-center"><i class="fas fa-circle mr-2 text-xs text-gray-500"></i>Area 2</li>
              <li class="flex items-center"><i class="fas fa-circle mr-2 text-xs text-gray-500"></i>Area 3</li>
              <li class="flex items-center"><i class="fas fa-circle mr-2 text-xs text-gray-500"></i>Area 4</li>
            </ul>
          </li>
          <li class="py-2"><a href="#" class="text-gray-700 flex items-center"><i class="fas fa-upload mr-2"></i>Subir Documentos</a></li>
        </ul>
      </nav>
    </div>

    <!-- Main Content Section for Upload -->
    <div class="flex-1 p-6 bg-white border-l border-black overflow-y-auto">
      <!-- Breadcrumb navigation -->
      <div class="flex justify-between items-center mt-4 border-b border-gray-300 pb-2">
        <h2 class="text-lg font-bold text-gray-800">Inicio / Subir Documentos</h2>
      </div>

      <!-- Upload Section -->
      <div class="mt-8">
        <h3 class="text-3xl font-bold text-gray-800 text-center mb-6">Subir Documentos</h3>

        <!-- Enlarged File selection and upload button area -->
        <div class="bg-gray-200 p-12 rounded-lg shadow-md mx-auto max-w-3xl">
          <div class="flex justify-between items-center mb-8">
            <label for="file-upload" class="cursor-pointer text-gray-700 font-semibold text-xl">(Seleccionar Archivo)</label>
            <input type="file" id="file-upload" class="hidden">
            <button class="px-8 py-4 bg-blue-500 text-white rounded hover:bg-blue-600 transition font-semibold text-xl">(Subir)</button>
          </div>
          <hr class="border-gray-400">

          <!-- List of uploaded documents -->
          <div class="mt-8">
            <h4 class="text-2xl font-semibold text-gray-800 mb-4">Documentos Subidos:</h4>
            <ul class="list-disc list-inside text-gray-700 text-xl">
              <li>documento1.pdf</li>
              <li>documento2.txt</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
