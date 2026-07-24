@extends('layouts.app')

@section('content')
<div class="container-fluid" style="max-width: 800px;">
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-dark font-weight-bold">Nueva Orden de Servicio</h1>
        <a href="{{ url('/dashboard') }}" class="text-decoration-none text-primary">
            <i class="fa-solid fa-arrow-left me-1"></i> Volver
        </a>
    </div>

    <div class="card shadow-sm border-0 rounded">
        <div class="card-body p-4 p-md-5">
            
            <!-- Validation Errors Summary -->
            @if ($errors->any())
                <div class="alert alert-danger d-flex align-items-center mb-4" role="alert">
                    <i class="fa-solid fa-circle-exclamation me-3 fs-5"></i>
                    <div>
                        <strong>Oops!</strong> Por favor, corrige los errores en el formulario.
                    </div>
                </div>
            @endif

            <form action="{{ route('ordenes.store') ?? '#' }}" method="POST">
                @csrf

                <!-- Cliente -->
                <div class="mb-4">
                    <label for="cliente_id" class="form-label fw-semibold">Cliente</label>
                    <select name="cliente_id" id="cliente_id" class="form-select form-select-lg @error('cliente_id') is-invalid @enderror">
                        <option value="">Seleccione un cliente</option>
                        <option value="1" {{ old('cliente_id') == '1' ? 'selected' : '' }}>Juan Pérez</option>
                        <option value="2" {{ old('cliente_id') == '2' ? 'selected' : '' }}>María López</option>
                        <option value="3" {{ old('cliente_id') == '3' ? 'selected' : '' }}>Carlos Rojas</option>
                    </select>
                    @error('cliente_id')
                        <div class="invalid-feedback fw-medium">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Vehículo -->
                <div class="mb-4">
                    <label for="vehiculo_id" class="form-label fw-semibold">Vehículo</label>
                    <select name="vehiculo_id" id="vehiculo_id" class="form-select form-select-lg @error('vehiculo_id') is-invalid @enderror">
                        <option value="">Seleccione un vehículo</option>
                        <option value="1" {{ old('vehiculo_id') == '1' ? 'selected' : '' }}>Toyota Hilux (3456-ABC)</option>
                        <option value="2" {{ old('vehiculo_id') == '2' ? 'selected' : '' }}>Nissan Versa (1234-XYZ)</option>
                    </select>
                    @error('vehiculo_id')
                        <div class="invalid-feedback fw-medium">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Servicio -->
                <div class="mb-4">
                    <label for="servicio" class="form-label fw-semibold">Servicio</label>
                    <select name="servicio" id="servicio" class="form-select form-select-lg @error('servicio') is-invalid @enderror">
                        <option value="">Seleccione un servicio</option>
                        <option value="cambio_aceite" {{ old('servicio') == 'cambio_aceite' ? 'selected' : '' }}>Cambio de aceite</option>
                        <option value="frenos" {{ old('servicio') == 'frenos' ? 'selected' : '' }}>Frenos delanteros</option>
                        <option value="diagnostico" {{ old('servicio') == 'diagnostico' ? 'selected' : '' }}>Diagnóstico general</option>
                    </select>
                    @error('servicio')
                        <div class="invalid-feedback fw-medium">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Descripción -->
                <div class="mb-4">
                    <label for="descripcion" class="form-label fw-semibold">Descripción</label>
                    <textarea name="descripcion" id="descripcion" rows="3" class="form-control form-control-lg @error('descripcion') is-invalid @enderror" placeholder="Detalles del servicio...">{{ old('descripcion') }}</textarea>
                    @error('descripcion')
                        <div class="invalid-feedback fw-medium">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Fecha -->
                <div class="mb-5">
                    <label for="fecha" class="form-label fw-semibold">Fecha</label>
                    <input type="date" name="fecha" id="fecha" value="{{ old('fecha') }}" class="form-control form-control-lg @error('fecha') is-invalid @enderror">
                    @error('fecha')
                        <div class="invalid-feedback fw-medium">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-lg py-3 fw-bold shadow-sm">
                        <i class="fa-solid fa-save me-2"></i> Guardar Orden
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
