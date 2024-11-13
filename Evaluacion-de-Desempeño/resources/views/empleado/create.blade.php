@extends('adminlte::page')

@section('template_title')
    {{ __('Create') }} Empleado
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Empleado</span>
                    </div>
                    <div class="card-body bg-white">
                        <form action="{{ route('empleados.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                            </div>

                            <div class="form-group">
                                <label for="apellido">Apellido</label>
                                <input type="text" name="apellido" class="form-control" placeholder="Apellido">
                            </div>

                            <div class="form-group">
                                <label for="puesto_id">Puesto</label>
                                <select name="puesto_id" id="puesto_id" class="form-control" required>
                                    <option value="" disabled selected>Selecciona un puesto</option>
                                    @foreach($puestos as $puesto)
                                        <option value="{{ $puesto->id }}">{{ $puesto->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
