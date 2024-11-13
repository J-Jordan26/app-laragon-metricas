@extends('adminlte::page')

@section('content')
<div class="container">
    <h1>Puestos</h1>
    <a href="{{ route('puestos.create') }}" class="btn btn-primary mb-3">Agregar Puesto</a>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista de Puestos</h3>
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
                    @foreach($puestos as $puesto)
                    <tr>
                        <td>{{ $puesto->id }}</td>
                        <td>{{ $puesto->nombre }}</td>
                        <td>{{ $puesto->descripcion }}</td>
                        <td>
                            <a href="{{ route('puestos.edit', $puesto->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('puestos.destroy', $puesto->id) }}" method="POST" style="display:inline;">
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
