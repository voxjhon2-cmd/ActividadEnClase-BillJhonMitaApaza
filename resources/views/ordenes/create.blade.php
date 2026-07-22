@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="mb-6 flex items-center justify-between">
        <h1 class="text-2xl font-semibold text-gray-800">Nueva Orden de Servicio</h1>
        <a href="{{ url('/dashboard') }}" class="text-blue-600 hover:text-blue-800">
            <i class="fa-solid fa-arrow-left mr-1"></i> Volver
        </a>
    </div>

    <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-6">
        
        <!-- Validation Errors Summary (optional, but good practice) -->
        @if ($errors->any())
            <div class="mb-4 bg-red-50 border-l-4 border-red-500 p-4">
                <div class="flex items-center">
                    <i class="fa-solid fa-circle-exclamation text-red-500 mr-2"></i>
                    <p class="text-sm text-red-700 font-medium">Por favor, corrige los errores en el formulario.</p>
                </div>
            </div>
        @endif

        <form action="{{ route('ordenes.store') ?? '#' }}" method="POST">
            @csrf

            <!-- Cliente -->
            <div class="mb-4">
                <label for="cliente_id" class="block text-sm font-medium text-gray-700 mb-1">Cliente</label>
                <select name="cliente_id" id="cliente_id" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 border p-2 bg-white @error('cliente_id') border-red-500 @enderror">
                    <option value="">Seleccione un cliente</option>
                    <option value="1" {{ old('cliente_id') == '1' ? 'selected' : '' }}>Juan Pérez</option>
                    <option value="2" {{ old('cliente_id') == '2' ? 'selected' : '' }}>María López</option>
                    <option value="3" {{ old('cliente_id') == '3' ? 'selected' : '' }}>Carlos Rojas</option>
                </select>
                @error('cliente_id')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Vehículo -->
            <div class="mb-4">
                <label for="vehiculo_id" class="block text-sm font-medium text-gray-700 mb-1">Vehículo</label>
                <select name="vehiculo_id" id="vehiculo_id" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 border p-2 bg-white @error('vehiculo_id') border-red-500 @enderror">
                    <option value="">Seleccione un vehículo</option>
                    <option value="1" {{ old('vehiculo_id') == '1' ? 'selected' : '' }}>Toyota Hilux (3456-ABC)</option>
                    <option value="2" {{ old('vehiculo_id') == '2' ? 'selected' : '' }}>Nissan Versa (1234-XYZ)</option>
                </select>
                @error('vehiculo_id')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Servicio -->
            <div class="mb-4">
                <label for="servicio" class="block text-sm font-medium text-gray-700 mb-1">Servicio</label>
                <select name="servicio" id="servicio" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 border p-2 bg-white @error('servicio') border-red-500 @enderror">
                    <option value="">Seleccione un servicio</option>
                    <option value="cambio_aceite" {{ old('servicio') == 'cambio_aceite' ? 'selected' : '' }}>Cambio de aceite</option>
                    <option value="frenos" {{ old('servicio') == 'frenos' ? 'selected' : '' }}>Frenos delanteros</option>
                    <option value="diagnostico" {{ old('servicio') == 'diagnostico' ? 'selected' : '' }}>Diagnóstico general</option>
                </select>
                @error('servicio')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Descripción -->
            <div class="mb-4">
                <label for="descripcion" class="block text-sm font-medium text-gray-700 mb-1">Descripción</label>
                <textarea name="descripcion" id="descripcion" rows="3" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 border p-2 @error('descripcion') border-red-500 @enderror" placeholder="Detalles del servicio...">{{ old('descripcion') }}</textarea>
                @error('descripcion')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Fecha -->
            <div class="mb-6">
                <label for="fecha" class="block text-sm font-medium text-gray-700 mb-1">Fecha</label>
                <div class="relative">
                    <input type="date" name="fecha" id="fecha" value="{{ old('fecha') }}" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 border p-2 @error('fecha') border-red-500 @enderror">
                </div>
                @error('fecha')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="mt-6">
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-md transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                    Guardar
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
