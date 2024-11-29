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
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">

    <!-- Navbar -->
    <nav class="bg-gradient-to-r from-blue-900 to-blue-700 shadow-lg py-4 px-6">
        <div class="container mx-auto flex items-center">
            <!-- Texto alineado a la izquierda -->
            <div class="text-white text-left">
                <p class="text-sm font-light leading-tight">Centro Educativo y Cultural del Estado</p>
                <p class="text-xl md:text-3xl font-bold leading-tight">GÓMEZ MORIN</p>
            </div>
        </div>
    </nav>

    <!-- Contenido Principal -->
    <main class="flex-grow flex items-center justify-center py-10 px-4">
        @yield('content')
    </main>

    <!-- Pie de página -->
    <footer class="bg-gradient-to-r from-blue-900 to-blue-700 text-white text-center py-6">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0 md:space-x-8">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-phone-alt"></i>
                    <span>Teléfono: (442) 251 9600</span>
                </div>
                <div class="flex items-center space-x-2">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Av. Constituyentes Esq. Luis Pasteur S/N, Col. Villas del Sur, C.P.76000, Santiago de Querétaro, Qro.</span>
                </div>
            </div>
            <div class="mt-4 text-xs px-4">
                "Esta obra, programa o acción es de carácter público, no es patrocinado ni promovido por partido político alguno..."
            </div>
        </div>
    </footer>

    <!-- Flowbite Script -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@1.6.3/dist/flowbite.min.js"></script>
</body>
</html>
