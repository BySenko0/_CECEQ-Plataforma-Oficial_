<!-- resources/views/layouts/navbar.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SGD-CECEQ')</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Flowbite CSS -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@1.6.3/dist/flowbite.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">

    <!-- NavBar Superior -->
    <header class="bg-blue-800 text-white flex items-center justify-between p-4">
        <!-- Logo y Título -->
        <div class="flex items-center space-x-2">
            <img src="https://via.placeholder.com/50" alt="Logo Secretaría" class="h-10">
            <h1 class="font-bold text-lg">CECEQ SGD-CECEQ</h1>
        </div>
        <!-- Menú desplegable de perfil (Flowbite) -->
        <div class="relative">
            <button id="dropdownButton" data-dropdown-toggle="dropdown" class="flex items-center focus:outline-none">
                <img src="https://via.placeholder.com/40" alt="User Avatar" class="rounded-full h-10 w-10 mr-2">
                <span>Abraham Perez</span>
                <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <!-- Dropdown menu -->
            <div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow">
                <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownButton">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Mi perfil</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Configuración</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Cerrar sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <div class="flex flex-grow">
        <!-- Sidebar Izquierda -->
        <aside class="w-64 bg-gray-200 p-4">
            <!-- Información del usuario -->
            <div class="text-center mb-6">
                <img src="https://via.placeholder.com/80" alt="User Avatar" class="mx-auto rounded-full mb-2 border-2 border-gray-300">
                <div class="text-lg font-bold">MDG2309AC</div>
                <div class="text-gray-600">Abraham Perez Navor</div>
                <div class="text-sm text-gray-500">Administrador</div>
                <hr class="my-4 border-gray-500">
            </div>

            <!-- Menú de navegación -->
            <nav class="space-y-4">
                <a href="#" class="flex items-center text-blue-700 hover:text-blue-900 font-semibold">
                    <i class="fas fa-home mr-2"></i> Inicio
                </a>
                <a href="#" class="flex items-center text-gray-600 hover:text-blue-900">
                    <i class="fas fa-user mr-2"></i> Mi información
                </a>
                <div class="mt-4">
                    <h3 class="text-sm font-semibold text-gray-500 mb-2">Áreas</h3>
                    <ul class="space-y-1 pl-4 text-sm">
                        <li><a href="#" class="flex items-center text-gray-600 hover:text-blue-900"><i class="fas fa-circle text-xs mr-2"></i> Area 1</a></li>
                        <li><a href="#" class="flex items-center text-gray-600 hover:text-blue-900"><i class="fas fa-circle text-xs mr-2"></i> Area 2</a></li>
                        <li><a href="#" class="flex items-center text-gray-600 hover:text-blue-900"><i class="fas fa-circle text-xs mr-2"></i> Area 3</a></li>
                        <li><a href="#" class="flex items-center text-gray-600 hover:text-blue-900"><i class="fas fa-circle text-xs mr-2"></i> Area 4</a></li>
                    </ul>
                </div>
            </nav>
        </aside>

        <!-- Contenedor principal vacío -->
        <main class="flex-grow bg-white p-6">
            <!-- Aquí puedes agregar contenido adicional si lo necesitas -->
            @yield('content')
        </main>
    </div>

    <!-- Font Awesome y Flowbite JS para dropdown -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@1.6.3/dist/flowbite.min.js"></script>
</body>
</html>
