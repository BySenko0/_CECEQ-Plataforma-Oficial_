<!-- resources/views/layouts/login_or_register.blade.php -->
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
    <!-- Font Awesome para los íconos -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">
    <!-- Encabezado -->
    <header class="bg-blue-800 text-white p-4 flex items-center justify-between">
        <div class="text-2xl font-bold pl-4">SGD-CECEQ</div>
        <div class="pr-4">
            <img src="logo-secretaria.png" alt="Logo Secretaría" class="h-10">
        </div>
    </header>

    <!-- Contenido Principal -->
    <main class="flex-grow flex items-center justify-center py-12">
        @yield('content')
    </main>

    <!-- Pie de página -->
    <footer class="bg-blue-800 text-white text-center p-4">
        <div class="flex justify-center items-center space-x-4 mb-2">
            <i class="fas fa-phone-alt"></i>
            <i class="fas fa-map-marker-alt"></i>
            <p class="text-sm">
                Dirección: Av. Constituyentes Esq. Luis Pasteur S/N Col. Villas del Sur, C.P.76000. Santiago de Querétaro, Qro. Teléfono: (442) 251 9600.
            </p>
        </div>
        <div class="flex justify-center space-x-4 mb-2">
            <a href="#" class="text-white"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
        </div>
        <p class="text-xs mt-2 px-4">
            "Esta obra, programa o acción es de carácter público, no es patrocinado ni promovido por partido político alguno..."
        </p>
    </footer>

    <!-- Flowbite Script -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@1.6.3/dist/flowbite.min.js"></script>
</body>
</html>
