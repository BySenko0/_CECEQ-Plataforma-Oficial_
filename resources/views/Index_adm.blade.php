<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vista de Documentos - Usuario</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Font Awesome para los iconos -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100 font-sans">

  <!-- Barra superior azul de extremo a extremo con contenido de la imagen -->
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
    <button class="text-2xl"><i class="fas fa-sign-out-alt"></i></button>
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
              <li class="flex items-center text-blue-700"><i class="fas fa-circle mr-2 text-xs"></i>Area 1</li>
              <li class="flex items-center"><i class="fas fa-circle mr-2 text-xs text-gray-500"></i>Area 2</li>
              <li class="flex items-center"><i class="fas fa-circle mr-2 text-xs text-gray-500"></i>Area 3</li>
              <li class="flex items-center"><i class="fas fa-circle mr-2 text-xs text-gray-500"></i>Area 4</li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>

    <!-- Contenido Principal -->
    <div class="flex-1 p-6 bg-white border-l border-black overflow-y-auto">
      <!-- Título de área -->
      <div class="flex justify-between items-center mt-4 border-b border-gray-300 pb-2">
        <h2 class="text-lg font-bold text-gray-800">Inicio</h2>
      </div>

      <!-- Mensaje de bienvenida -->
      <div class="mt-6">
        <h3 class="text-xl font-bold text-gray-800">Bienvenido(a) ABRAHAM PEREZ</h3>
        <p class="text-gray-700 mt-4 text-center">
          "Bienvenido al portal del CECEQ, donde podrás acceder y gestionar el sistema de control documental e información de manera eficiente y segura."
        </p>
      </div>

      <!-- Sección de Áreas -->
      <div class="mt-8 text-center">
        <h4 class="text-lg font-semibold text-gray-800 mb-4">Áreas</h4>
        <div class="grid grid-cols-4 gap-4">
          <!-- Area cards -->
          <div class="bg-gray-300 p-6 flex items-center justify-center h-48 w-40 mx-auto rounded-lg">
            <p class="text-center italic font-bold text-gray-700">Area 1</p>
          </div>
          <div class="bg-gray-300 p-6 flex items-center justify-center h-48 w-40 mx-auto rounded-lg">
            <p class="text-center italic font-bold text-gray-700">Area 2</p>
          </div>
          <div class="bg-gray-300 p-6 flex items-center justify-center h-48 w-40 mx-auto rounded-lg">
            <p class="text-center italic font-bold text-gray-700">Area 3</p>
          </div>
          <div class="bg-gray-300 p-6 flex items-center justify-center h-48 w-40 mx-auto rounded-lg">
            <p class="text-center italic font-bold text-gray-700">Area 4</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
