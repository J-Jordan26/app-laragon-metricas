<?php

namespace App\Http\Controllers;

use App\Models\Evaluacciondetalle;
use App\Models\Evaluacion;
use App\Models\Metrica;
use App\Http\Requests\EvaluacciondetalleRequest;

class EvaluacciondetalleController extends Controller
{
    public function index()
    {
        $evaluacciondetalles = Evaluacciondetalle::with('evaluacion', 'metrica')->paginate();

        return view('evaluacciondetalle.index', compact('evaluacciondetalles'))
            ->with('i', (request()->input('page', 1) - 1) * $evaluacciondetalles->perPage());
    }

    public function create()
    {
        $evaluacciondetalle = new Evaluacciondetalle();
        $evaluaciones = Evaluacion::all();
        $metricas = Metrica::all();
        
        return view('evaluacciondetalle.create', compact('evaluacciondetalle', 'evaluaciones', 'metricas'));
    }

    public function store(EvaluacciondetalleRequest $request)
    {
        Evaluacciondetalle::create($request->validated());

        return redirect()->route('evaluacciondetalles.index')
            ->with('success', 'Detalle de evaluación creado exitosamente.');
    }

    public function edit($id)
    {
        $evaluacciondetalle = Evaluacciondetalle::find($id);
        $evaluaciones = Evaluacion::all();
        $metricas = Metrica::all();
        
        return view('evaluacciondetalle.edit', compact('evaluacciondetalle', 'evaluaciones', 'metricas'));
    }

    public function update(EvaluacciondetalleRequest $request, Evaluacciondetalle $evaluacciondetalle)
    {
        $evaluacciondetalle->update($request->validated());

        return redirect()->route('evaluacciondetalles.index')
            ->with('success', 'Detalle de evaluación actualizado exitosamente');
    }
}
