@extends('adminlte::page')

@section('title', 'Métricas')

@section('content')
<div class="container-fluid py-4">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title"><i class="fas fa-chart-line"></i> Métricas</h3>
        </div>
        
        <div class="card-body">
            <form method="GET" action="{{ route('home') }}">
                <div class="row mb-4">
                    <div class="col-md-5">
                        <label for="empleado" class="form-label">Seleccionar Empleado:</label>
                        <select class="form-control select2" name="empleado_id">
                            <option value="">-- Seleccionar Empleado --</option>
                            @foreach($empleados as $empleado)
                                <option value="{{ $empleado->id }}">{{ $empleado->nombre }} {{ $empleado->apellido }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-5">
                        <label for="metrica" class="form-label">Seleccionar Métrica:</label>
                        <select class="form-control select2" name="metrica_id">
                            <option value="">-- Seleccionar Métrica --</option>
                            @foreach($metricas as $metrica)
                                <option value="{{ $metrica->id }}">{{ $metrica->nombre }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-2 d-flex align-items-end">
                        <button type="submit" class="btn btn-success w-100"><i class="fas fa-filter"></i> Filtrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="card mt-4 shadow-lg">
        <div class="card-header bg-info text-white">
            <h4 class="card-title"><i class="fas fa-table"></i> Resultados Filtrados</h4>
        </div>

        <div class="card-body table-responsive">
            <table class="table table-bordered table-hover text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Empleado</th>
                        <th>Fecha Evaluación</th>
                        <th>Puntaje</th>
                        <th>Observaciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($evaluaciones as $evaluacion)
                        <tr>
                            <td>{{ $evaluacion->empleado->nombre }} {{ $evaluacion->empleado->apellido }}</td>
                            <td>{{ \Carbon\Carbon::parse($evaluacion->fecha_evaluacion)->format('d-m-Y') }}</td>
                            <td>
                                <span class="badge bg-{{ $evaluacion->puntaje >= 0.7 ? 'success' : ($evaluacion->puntaje >= 0.4 ? 'warning' : 'danger') }}">
                                    {{ $evaluacion->puntaje }}
                                </span>
                            </td>
                            <td>{{ $evaluacion->observaciones }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-muted">No hay resultados para los filtros seleccionados.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('css')
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/css/select2.min.css">
    <style>
        .select2-container .select2-selection--single {
            height: 38px !important;
        }
    </style>
@endsection

@section('js')
  
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
@endsection

