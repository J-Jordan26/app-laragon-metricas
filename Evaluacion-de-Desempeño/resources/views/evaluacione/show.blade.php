@extends('adminlte::page')

@section('template_title')
    {{ $evaluacione->name ?? __('Show') . " " . __('Evaluacione') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Evaluacione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('evaluaciones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Evaluaciones Id:</strong>
                            {{ $evaluacione->evaluaciones_id }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Empleado Id:</strong>
                            {{ $evaluacione->empleado_id }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha Evaluacion:</strong>
                            {{ $evaluacione->fecha_evaluacion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Puntaje:</strong>
                            {{ $evaluacione->puntaje }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Observaciones:</strong>
                            {{ $evaluacione->observaciones }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
