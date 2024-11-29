<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.6.5/dist/flowbite.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        lavender: '#E6E6FA',
                    },
                },
            },
        };
    </script>
    <style>
        .sidebar-transition {
            transition: transform 0.3s ease-in-out;
        }
    </style>
</head>
<body class="bg-lavender min-h-screen">

    <!-- Barra de navegación -->
    <nav class="bg-gradient-to-r from-blue-900 to-blue-700 shadow-lg py-4 px-6 flex items-center">
        <!-- Botón del menú -->
        <button id="menu-toggle" class="flex flex-col gap-1 focus:outline-none focus:ring-2 focus:ring-blue-300" aria-expanded="false" aria-label="Toggle sidebar">
            <span class="w-7 h-1 bg-white rounded"></span>
            <span class="w-7 h-1 bg-white rounded"></span>
            <span class="w-7 h-1 bg-white rounded"></span>
        </button>
        <!-- Información del Centro -->
        <div class="text-white text-left pl-4 flex-1">
            <p class="text-xs font-light leading-tight">Centro Educativo y Cultural del Estado</p>
            <p class="text-lg font-bold leading-tight">GÓMEZ MORIN</p>
        </div>
        <!-- Botón de usuario -->
        <div class="flex items-center ml-4">
            <button class="w-10 h-10 flex items-center justify-center text-white bg-blue-700 hover:bg-blue-800 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-400" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
                </svg>
            </button>
            <!-- Dropdown del usuario -->
            <div id="userDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                <div class="px-4 py-3 text-sm text-gray-900">
                    <div>Administrador</div>
                </div>
                <ul class="py-2 text-sm text-gray-700" aria-labelledby="avatarButton">
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Configuración</a></li>
                </ul>
                <div class="py-1">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Cerrar sesión</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Sidebar -->
    <div id="sidebar" class="fixed top-0 left-0 h-full w-64 bg-lavender shadow-md sidebar-transition transform -translate-x-full z-50">
        <!-- Botón para cerrar el menú -->
        <button id="close-menu" class="text-2xl text-black p-4" aria-label="Close sidebar">&times;</button>
        
        <div class="text-center mb-6 border-b pb-4 border-gray-300">
            <div class="bg-gray-300 w-16 h-16 rounded-full mx-auto"></div>
            <h3 class="text-lg font-semibold mt-2 text-gray-800">MDG2309AC</h3>
            <p class="text-gray-700">Abraham Perez Navor</p>
            <p class="text-gray-700">Administrador</p>
        </div>
        
        <ul class="mt-4 space-y-2">
            <!-- Opción de Inicio -->
            <li class="p-4 flex items-center hover:bg-purple-300 cursor-pointer">
                <i class="fas fa-home w-6 h-6 text-gray-800 mr-3"></i>
                <span class="ml-3">Inicio</span>
            </li>

            <!-- Opción Mi perfil -->
            <li class="p-4 flex items-center hover:bg-purple-300 cursor-pointer">
                <i class="fas fa-user w-6 h-6 text-gray-800 mr-3"></i>
                <span class="ml-3">Mi perfil</span>
            </li>

            <!-- Opción Documentos -->
            <li class="p-4 flex items-center hover:bg-purple-300 cursor-pointer">
                <i class="fas fa-user w-6 h-6 text-gray-800 mr-3"></i>
                <span class="ml-3">Mis Documentos</span>
            </li>

            <!-- Opción Areas -->
            <li>
                <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Areas</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
                <ul id="dropdown-example" class="hidden py-2 space-y-2">
                    <li>
                        <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Área Legislativa</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Área Judicial</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Área Administrativa</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Área Fiscal</a>
                    </li>
                </ul>
            </li>

            <!-- Opción de Cerrar sesión -->
            <li class="p-4 flex items-center hover:bg-purple-300 cursor-pointer">
                <i class="fas fa-sign-out-alt w-6 h-6 text-gray-800 mr-3"></i>
                <span class="ml-3">Cerrar sesión</span>
            </li>
        </ul>
    </div>

    <!-- Contenido dinámico -->
    <main class="p-6 bg-white">
        @yield('content')
    </main>

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const closeMenu = document.getElementById('close-menu');
        const sidebar = document.getElementById('sidebar');

        menuToggle.addEventListener('click', () => {
            const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
            menuToggle.setAttribute('aria-expanded', !isExpanded);
            sidebar.classList.toggle('-translate-x-full');
        });

        closeMenu.addEventListener('click', () => {
            sidebar.classList.add('-translate-x-full');
            menuToggle.setAttribute('aria-expanded', 'false');
        });
    </script>
</body>
</html>
