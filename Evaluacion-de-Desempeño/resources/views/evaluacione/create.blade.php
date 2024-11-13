@extends('adminlte::page')

@section('template_title')
    {{ __('Create') }} Evaluacione
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">{{ __('Create') }} Evaluacione</span>
                </div>
                <div class="card-body bg-white">
                    <form action="{{ route('evaluaciones.store') }}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf

                        <!-- Campo de selección de empleado -->
                        <div class="form-group">
                            <label for="empleado_id">Empleado:</label>
                            <select name="empleado_id" id="empleado_id" class="form-control" required>
                                <option value="" disabled selected>Selecciona un empleado</option>
                                @foreach($empleados as $empleado)
                                    <option value="{{ $empleado->id }}">{{ $empleado->nombre }} {{ $empleado->apellido }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Campo de fecha de evaluación -->
                        <div class="form-group">
                            <label for="fecha_evaluacion">Fecha de Evaluación:</label>
                            <input type="date" name="fecha_evaluacion" id="fecha_evaluacion" class="form-control" required>
                        </div>

                        <!-- Campo de puntaje con rango de 0 a 1 en incrementos de 0.1 -->
                        <div class="form-group">
                            <label for="puntaje">Puntaje:</label>
                            <input type="number" step="0.1" min="0" max="1" name="puntaje" id="puntaje" class="form-control" placeholder="0.0" required>
                        </div>

                        <!-- Campo de observaciones -->
                        <div class="form-group">
                            <label for="observaciones">Observaciones:</label>
                            <textarea name="observaciones" id="observaciones" class="form-control" rows="3" placeholder="Escribe las observaciones aquí..."></textarea>
                        </div>

                        <!-- Botón de envío -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
