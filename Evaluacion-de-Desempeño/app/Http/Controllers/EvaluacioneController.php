<?php

namespace App\Http\Controllers;

use App\Models\Evaluacione;
use App\Models\Empleado;
use App\Http\Requests\EvaluacioneRequest;

class EvaluacioneController extends Controller
{
    public function index()
    {
        // Cargar la relación con el modelo Empleado para acceder a los nombres
        $evaluaciones = Evaluacione::with('empleado')->paginate(10);

        return view('evaluacione.index', compact('evaluaciones'))
            ->with('i', (request()->input('page', 1) - 1) * $evaluaciones->perPage());
    }

    public function create()
    {
        $evaluacione = new Evaluacione();
        $empleados = Empleado::all();
        return view('evaluacione.create', compact('evaluacione', 'empleados'));
    }

    public function store(EvaluacioneRequest $request)
    {
        $data = $request->validated();

        if (isset($data['puntaje']) && ($data['puntaje'] < 0 || $data['puntaje'] > 1)) {
            return redirect()->back()->withErrors(['puntaje' => 'El puntaje debe estar entre 0 y 1.']);
        }

        Evaluacione::create($data);

        return redirect()->route('evaluaciones.index')
            ->with('success', 'Evaluación creada correctamente.');
    }

    public function show($id)
    {
        $evaluacione = Evaluacione::find($id);

        return view('evaluacione.show', compact('evaluacione'));
    }

    public function edit($id)
    {
        $evaluacione = Evaluacione::find($id);
        $empleados = Empleado::all();

        return view('evaluacione.edit', compact('evaluacione', 'empleados'));
    }

    public function update(EvaluacioneRequest $request, Evaluacione $evaluacione)
    {
        $data = $request->validated();

        if (isset($data['puntaje']) && ($data['puntaje'] < 0 || $data['puntaje'] > 1)) {
            return redirect()->back()->withErrors(['puntaje' => 'El puntaje debe estar entre 0 y 1.']);
        }

        $evaluacione->update($data);

        return redirect()->route('evaluaciones.index')
            ->with('success', 'Evaluación actualizada correctamente');
    }

    public function destroy($id)
    {
        Evaluacione::find($id)->delete();

        return redirect()->route('evaluaciones.index')
            ->with('success', 'Evaluación eliminada correctamente');
    }
}
