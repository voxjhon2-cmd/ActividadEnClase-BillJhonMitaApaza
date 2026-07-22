<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller Pro - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans antialiased text-gray-900 flex h-screen">

    <!-- Sidebar -->
    <div class="bg-gray-900 text-white w-64 flex-shrink-0 flex flex-col h-full">
        <div class="p-4 flex items-center justify-center border-b border-gray-800">
            <i class="fa-solid fa-car-side text-blue-500 text-2xl mr-2"></i>
            <span class="text-xl font-bold">TALLER <span class="text-blue-500">PRO</span></span>
        </div>
        
        <nav class="flex-1 overflow-y-auto py-4">
            <ul class="space-y-1">
                <li>
                    <a href="#" class="flex items-center px-6 py-3 bg-blue-600 text-white font-medium">
                        <i class="fa-solid fa-house w-5 mr-3 text-center"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-6 py-3 text-gray-300 hover:bg-gray-800 hover:text-white transition-colors">
                        <i class="fa-solid fa-users w-5 mr-3 text-center"></i> Clientes
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-6 py-3 text-gray-300 hover:bg-gray-800 hover:text-white transition-colors">
                        <i class="fa-solid fa-car w-5 mr-3 text-center"></i> Vehículos
                    </a>
                </li>
                <li>
                    <a href="{{ route('ordenes.create') }}" class="flex items-center px-6 py-3 text-gray-300 hover:bg-gray-800 hover:text-white transition-colors">
                        <i class="fa-solid fa-clipboard-list w-5 mr-3 text-center"></i> Órdenes de Servicio
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-6 py-3 text-gray-300 hover:bg-gray-800 hover:text-white transition-colors">
                        <i class="fa-solid fa-box w-5 mr-3 text-center"></i> Repuestos
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-6 py-3 text-gray-300 hover:bg-gray-800 hover:text-white transition-colors">
                        <i class="fa-solid fa-user-tie w-5 mr-3 text-center"></i> Empleados
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-6 py-3 text-gray-300 hover:bg-gray-800 hover:text-white transition-colors">
                        <i class="fa-solid fa-chart-bar w-5 mr-3 text-center"></i> Reportes
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-6 py-3 text-gray-300 hover:bg-gray-800 hover:text-white transition-colors">
                        <i class="fa-solid fa-gear w-5 mr-3 text-center"></i> Configuración
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col h-full overflow-hidden">
        <!-- Topbar -->
        <header class="bg-white shadow-sm border-b border-gray-200">
            <div class="flex items-center justify-between px-6 py-3">
                <button class="text-gray-500 hover:text-gray-700 focus:outline-none">
                    <i class="fa-solid fa-bars text-xl"></i>
                </button>
                
                <div class="flex items-center">
                    <div class="flex items-center space-x-3">
                        <img src="https://ui-avatars.com/api/?name=Admin&background=0D8ABC&color=fff" alt="Avatar" class="h-8 w-8 rounded-full">
                        <span class="text-sm font-medium text-gray-700">Administrador</span>
                        <i class="fa-solid fa-chevron-down text-xs text-gray-400"></i>
                    </div>
                </div>
            </div>
        </header>

        <!-- Content Area -->
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50 p-6">
            @yield('content')
        </main>
    </div>

</body>
</html>
