@extends('adminlte::page')

@section('content')
<div class="container">
    <h1>Métricas</h1>
    <a href="{{ route('metricas.create') }}" class="btn btn-primary mb-3">Agregar Métrica</a>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista de Métricas</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($metricas as $metrica)
                    <tr>
                        <td>{{ $metrica->id }}</td>
                        <td>{{ $metrica->nombre }}</td>
                        <td>{{ $metrica->descripcion }}</td>
                        <td>
                            <a href="{{ route('metricas.edit', $metrica->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('metricas.destroy', $metrica->id) }}" method="POST" style="display:inline;">
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
