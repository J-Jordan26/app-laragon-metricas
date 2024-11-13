@extends('adminlte::page')

@section('content')
<div class="container">
    <h1>Evaluaciones</h1>
    <a href="{{ route('evaluaciones.create') }}" class="btn btn-primary mb-3">Agregar Evaluación</a>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista de Evaluaciones</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Empleado</th>
                        <th>Fecha Evaluación</th>
                        <th>Puntaje</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($evaluaciones as $evaluacion)
                    <tr>
                        <td>{{ $evaluacion->id }}</td>
                        <td>{{ $evaluacion->empleado->nombre }} {{ $evaluacion->empleado->apellido }}</td>
                        <td>{{ $evaluacion->fecha_evaluacion }}</td>
                        <td>{{ $evaluacion->puntaje }}</td>
                        <td>
                            <a href="{{ route('evaluaciones.edit', $evaluacion->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('evaluaciones.destroy', $evaluacion->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">No hay evaluaciones disponibles</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $evaluaciones->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
