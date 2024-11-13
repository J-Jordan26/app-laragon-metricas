@extends('adminlte::page')

@section('template_title')
    {{ $evaluacciondetalle->name ?? __('Show') . " " . __('Evaluacciondetalle') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Evaluacciondetalle</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('evaluacciondetalles.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Evaluacion Id:</strong>
                            {{ $evaluacciondetalle->evaluacion_id }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Metrica Id:</strong>
                            {{ $evaluacciondetalle->metrica_id }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Valor Obtenido:</strong>
                            {{ $evaluacciondetalle->valor_obtenido }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
