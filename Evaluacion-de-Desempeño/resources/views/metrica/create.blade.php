@extends('adminlte::page')

@section('template_title')
    {{ __('Create') }} Metrica
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Metrica</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('metricas.store') }}" role="form" enctype="multipart/form-data">
                            @csrf

                            @include('metrica.form', ['categorias' => $categorias])

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
