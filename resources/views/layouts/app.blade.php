<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller Pro - Dashboard</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            min-height: 100vh;
            background-color: #212529;
            color: white;
        }
        .sidebar .nav-link {
            color: #adb5bd;
            transition: all 0.3s;
        }
        .sidebar .nav-link:hover, .sidebar .nav-link.active {
            color: #fff;
            background-color: #343a40;
        }
        .sidebar-brand {
            padding: 1.5rem 1rem;
            font-size: 1.25rem;
            font-weight: bold;
            border-bottom: 1px solid #343a40;
        }
    </style>
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 p-0 sidebar d-flex flex-column">
                <div class="sidebar-brand text-center">
                    <i class="fa-solid fa-car-side text-primary me-2"></i>
                    TALLER <span class="text-primary">PRO</span>
                </div>
                
                <ul class="nav flex-column mb-auto pt-3">
                    <li class="nav-item">
                        <a href="#" class="nav-link py-3 px-4">
                            <i class="fa-solid fa-house fa-fw me-2"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link py-3 px-4">
                            <i class="fa-solid fa-users fa-fw me-2"></i> Clientes
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link py-3 px-4">
                            <i class="fa-solid fa-car fa-fw me-2"></i> Vehículos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('ordenes.create') ?? '#' }}" class="nav-link py-3 px-4 active">
                            <i class="fa-solid fa-clipboard-list fa-fw me-2"></i> Órdenes de Servicio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link py-3 px-4">
                            <i class="fa-solid fa-box fa-fw me-2"></i> Repuestos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link py-3 px-4">
                            <i class="fa-solid fa-user-tie fa-fw me-2"></i> Empleados
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link py-3 px-4">
                            <i class="fa-solid fa-chart-bar fa-fw me-2"></i> Reportes
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link py-3 px-4">
                            <i class="fa-solid fa-gear fa-fw me-2"></i> Configuración
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 p-0 d-flex flex-column" style="height: 100vh; overflow-y: auto;">
                <!-- Topbar -->
                <header class="bg-white shadow-sm py-3 px-4 d-flex justify-content-between align-items-center border-bottom">
                    <button class="btn btn-light d-md-none border-0">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    
                    <div class="d-flex align-items-center ms-auto">
                        <img src="https://ui-avatars.com/api/?name=Admin&background=0d6efd&color=fff" alt="Avatar" class="rounded-circle me-2" width="32" height="32">
                        <span class="fw-medium text-dark me-2">Administrador</span>
                        <i class="fa-solid fa-chevron-down text-muted small"></i>
                    </div>
                </header>

                <!-- Content Area -->
                <main class="flex-grow-1 p-4 bg-light">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmxc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
