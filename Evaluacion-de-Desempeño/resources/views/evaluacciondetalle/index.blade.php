@extends('adminlte::page')

@section('content')
<div class="container">
    <h1>Detalles de Evaluación</h1>
    <a href="{{ route('evaluacciondetalles.create') }}" class="btn btn-primary mb-3">Agregar Detalle de Evaluación</a>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista de Detalles de Evaluación</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Evaluación</th>
                        <th>Métrica</th>
                        <th>Valor Obtenido</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($evaluacciondetalles as $detalle)
                    <tr>
                        <td>{{ $detalle->id }}</td>
                        <td>{{ $detalle->evaluacion->nombre ?? 'N/A' }}</td>
                        <td>{{ $detalle->metrica->nombre ?? 'N/A' }}</td>
                        <td>{{ $detalle->valor_obtenido }}</td>
                        <td>
                            <a href="{{ route('evaluacciondetalles.edit', $detalle->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('evaluacciondetalles.destroy', $detalle->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
