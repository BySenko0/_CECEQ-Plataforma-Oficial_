<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGD-CECEQ - Login</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Flowbite CSS (necesario si usas componentes como tabs) -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@1.6.3/dist/flowbite.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">
    <!-- Encabezado -->
    <header class="bg-blue-800 text-white text-center p-4">
        <div class="text-2xl font-bold">SGD-CECEQ</div>
        <div class="text-right pr-4">
            <img src="logo-secretaria.png" alt="Logo Secretaría" class="h-10 inline">
        </div>
    </header>

    <!-- Contenedor del Formulario -->
    <main class="flex-grow flex items-center justify-center">
        <div class="bg-white shadow-md rounded-lg p-8 max-w-md w-full">
            <div class="flex justify-center mb-4 space-x-4">
                <!-- Enlace para el login (no hace nada aquí porque ya estamos en login) -->
                <span class="text-blue-700 border-b-2 border-blue-700 px-4 py-2">Ingresar</span>
                <!-- Enlace para la página de registro -->
                <a href="{{ route('registro.form') }}" class="text-blue-700 px-4 py-2 hover:underline">Registrar</a>
            </div>
            <h2 class="text-center text-2xl font-bold mb-6">INGRESAR</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <!-- Campo Correo -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Correo</label>
                    <input type="email" id="email" name="email" required
                        class="mt-1 p-2 border border-gray-300 rounded-lg w-full focus:ring-blue-500 focus:border-blue-500">
                </div>
                <!-- Campo Contraseña -->
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
                    <input type="password" id="password" name="password" required
                        class="mt-1 p-2 border border-gray-300 rounded-lg w-full focus:ring-blue-500 focus:border-blue-500">
                </div>
                <!-- Botón Ingresar -->
                <button type="submit" class="w-full bg-blue-700 text-white py-2 rounded-lg hover:bg-blue-800">INGRESAR</button>
            </form>
        </div>
    </main>

    <!-- Pie de página -->
    <footer class="bg-blue-800 text-white text-center p-4">
        <div class="flex justify-center space-x-4 mb-4">
            <!-- Iconos (puedes personalizarlos con los íconos que prefieras) -->
            <a href="#" class="text-white"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
        </div>
        <p class="text-sm">
            Dirección: Av. Constituyentes Esq. Luis Pasteur S/N Col. Villas del Sur, C.P.76000. Santiago de Querétaro, Qro.
            Teléfono: (442) 251 9600.
        </p>
        <p class="text-xs mt-2">
            "Esta obra, programa o acción es de carácter público, no es patrocinado ni promovido por partido político alguno..."
        </p>
    </footer>

    <!-- Flowbite Script -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@1.6.3/dist/flowbite.min.js"></script>
</body>
</html>
