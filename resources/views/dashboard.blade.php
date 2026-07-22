@extends('layouts.app')

@section('content')
<div class="mb-6">
    <h1 class="text-2xl font-semibold text-gray-800">Dashboard</h1>
</div>

<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Card 1 -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-5 flex items-center justify-between">
        <div>
            <p class="text-sm font-medium text-blue-600 mb-1">Clientes</p>
            <h3 class="text-3xl font-bold text-gray-800">128</h3>
            <p class="text-xs text-gray-500 mt-1">Clientes registrados</p>
        </div>
        <div class="bg-blue-100 p-3 rounded-lg text-blue-600">
            <i class="fa-solid fa-users text-2xl"></i>
        </div>
    </div>

    <!-- Card 2 -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-5 flex items-center justify-between">
        <div>
            <p class="text-sm font-medium text-green-600 mb-1">Vehículos</p>
            <h3 class="text-3xl font-bold text-gray-800">156</h3>
            <p class="text-xs text-gray-500 mt-1">Vehículos registrados</p>
        </div>
        <div class="bg-green-100 p-3 rounded-lg text-green-600">
            <i class="fa-solid fa-car text-2xl"></i>
        </div>
    </div>

    <!-- Card 3 -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-5 flex items-center justify-between">
        <div>
            <p class="text-sm font-medium text-orange-500 mb-1">Órdenes de Servicio</p>
            <h3 class="text-3xl font-bold text-gray-800">43</h3>
            <p class="text-xs text-gray-500 mt-1">En proceso</p>
        </div>
        <div class="bg-orange-100 p-3 rounded-lg text-orange-500">
            <i class="fa-solid fa-clipboard-list text-2xl"></i>
        </div>
    </div>

    <!-- Card 4 -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-5 flex items-center justify-between">
        <div>
            <p class="text-sm font-medium text-purple-600 mb-1">Servicios Completados</p>
            <h3 class="text-3xl font-bold text-gray-800">89</h3>
            <p class="text-xs text-gray-500 mt-1">Este mes</p>
        </div>
        <div class="bg-purple-100 p-3 rounded-lg text-purple-600">
            <i class="fa-regular fa-circle-check text-2xl"></i>
        </div>
    </div>
</div>

<!-- Charts Section (Placeholders for UI) -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
    <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-5">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Órdenes de Servicio por Estado</h3>
        <div class="flex items-center justify-center h-64">
            <!-- Simulating Pie Chart -->
            <div class="relative w-48 h-48 rounded-full" style="background: conic-gradient(#3B82F6 0% 35%, #F59E0B 35% 70%, #10B981 70% 100%);">
                <div class="absolute inset-0 m-auto w-32 h-32 bg-white rounded-full"></div>
            </div>
            <div class="ml-8 space-y-2">
                <div class="flex items-center"><span class="w-3 h-3 rounded-full bg-blue-500 mr-2"></span><span class="text-sm text-gray-600">Pendiente</span> <span class="text-sm font-bold ml-2">15 (35%)</span></div>
                <div class="flex items-center"><span class="w-3 h-3 rounded-full bg-yellow-500 mr-2"></span><span class="text-sm text-gray-600">En proceso</span> <span class="text-sm font-bold ml-2">15 (35%)</span></div>
                <div class="flex items-center"><span class="w-3 h-3 rounded-full bg-green-500 mr-2"></span><span class="text-sm text-gray-600">Completado</span> <span class="text-sm font-bold ml-2">13 (30%)</span></div>
            </div>
        </div>
    </div>
    
    <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-5">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Servicios Completados (Últimos 6 meses)</h3>
        <div class="h-64 flex items-end justify-between px-2 pb-6 relative">
            <!-- Simulating Line Chart Grid -->
            <div class="absolute inset-0 flex flex-col justify-between text-xs text-gray-400 pb-6">
                <div class="border-b border-gray-100 w-full">50</div>
                <div class="border-b border-gray-100 w-full">40</div>
                <div class="border-b border-gray-100 w-full">30</div>
                <div class="border-b border-gray-100 w-full">20</div>
                <div class="border-b border-gray-100 w-full">10</div>
                <div class="border-b border-gray-100 w-full">0</div>
            </div>
            
            <!-- Simulating Points and Line path -->
            <svg class="absolute inset-0 h-[calc(100%-1.5rem)] w-full" preserveAspectRatio="none" viewBox="0 0 100 100">
                <polyline points="10,60 25,50 40,70 55,40 70,55 85,30 100,15" fill="none" stroke="#3B82F6" stroke-width="2" vector-effect="non-scaling-stroke"/>
                <circle cx="10" cy="60" r="3" fill="#3B82F6" />
                <circle cx="25" cy="50" r="3" fill="#3B82F6" />
                <circle cx="40" cy="70" r="3" fill="#3B82F6" />
                <circle cx="55" cy="40" r="3" fill="#3B82F6" />
                <circle cx="70" cy="55" r="3" fill="#3B82F6" />
                <circle cx="85" cy="30" r="3" fill="#3B82F6" />
                <circle cx="100" cy="15" r="3" fill="#3B82F6" />
            </svg>

            <!-- X Axis Labels -->
            <div class="absolute bottom-0 w-full flex justify-between text-xs text-gray-500 px-4">
                <span>Ene</span><span>Feb</span><span>Mar</span><span>Abr</span><span>May</span><span>Jun</span>
            </div>
        </div>
    </div>
</div>

<!-- Table -->
<div class="bg-white rounded-lg shadow-sm border border-gray-100 overflow-hidden">
    <div class="p-5 border-b border-gray-100 flex justify-between items-center">
        <h3 class="text-lg font-semibold text-gray-800">Últimas Órdenes de Servicio</h3>
        <a href="{{ route('ordenes.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-medium hover:bg-blue-700 transition">
            <i class="fa-solid fa-plus mr-1"></i> Nueva Orden
        </a>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-50 text-gray-500 text-sm border-b border-gray-200">
                    <th class="px-6 py-3 font-medium">ID</th>
                    <th class="px-6 py-3 font-medium">Cliente</th>
                    <th class="px-6 py-3 font-medium">Vehículo</th>
                    <th class="px-6 py-3 font-medium">Servicio</th>
                    <th class="px-6 py-3 font-medium">Fecha</th>
                    <th class="px-6 py-3 font-medium text-center">Estado</th>
                </tr>
            </thead>
            <tbody class="text-sm">
                <tr class="border-b border-gray-100 hover:bg-gray-50">
                    <td class="px-6 py-4 text-gray-500">#OS-00045</td>
                    <td class="px-6 py-4 font-medium text-gray-800">Juan Pérez</td>
                    <td class="px-6 py-4 text-gray-600">Toyota Hilux</td>
                    <td class="px-6 py-4 text-gray-600">Cambio de aceite</td>
                    <td class="px-6 py-4 text-gray-600">15/06/2024</td>
                    <td class="px-6 py-4 text-center">
                        <span class="inline-block px-3 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">En proceso</span>
                    </td>
                </tr>
                <tr class="border-b border-gray-100 hover:bg-gray-50">
                    <td class="px-6 py-4 text-gray-500">#OS-00044</td>
                    <td class="px-6 py-4 font-medium text-gray-800">María López</td>
                    <td class="px-6 py-4 text-gray-600">Nissan Versa</td>
                    <td class="px-6 py-4 text-gray-600">Frenos delanteros</td>
                    <td class="px-6 py-4 text-gray-600">14/06/2024</td>
                    <td class="px-6 py-4 text-center">
                        <span class="inline-block px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">Pendiente</span>
                    </td>
                </tr>
                <tr class="border-b border-gray-100 hover:bg-gray-50">
                    <td class="px-6 py-4 text-gray-500">#OS-00043</td>
                    <td class="px-6 py-4 font-medium text-gray-800">Carlos Rojas</td>
                    <td class="px-6 py-4 text-gray-600">Hyundai Tucson</td>
                    <td class="px-6 py-4 text-gray-600">Diagnóstico general</td>
                    <td class="px-6 py-4 text-gray-600">13/06/2024</td>
                    <td class="px-6 py-4 text-center">
                        <span class="inline-block px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">Completado</span>
                    </td>
                </tr>
                <tr class="border-b border-gray-100 hover:bg-gray-50">
                    <td class="px-6 py-4 text-gray-500">#OS-00042</td>
                    <td class="px-6 py-4 font-medium text-gray-800">Ana Gómez</td>
                    <td class="px-6 py-4 text-gray-600">Suzuki Swift</td>
                    <td class="px-6 py-4 text-gray-600">Alineación y balanceo</td>
                    <td class="px-6 py-4 text-gray-600">12/06/2024</td>
                    <td class="px-6 py-4 text-center">
                        <span class="inline-block px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">Completado</span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
