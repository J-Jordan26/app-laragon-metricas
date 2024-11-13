<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Puesto; // importamos el modelo Puesto
use App\Http\Requests\EmpleadoRequest;

/**
 * Class EmpleadoController
 * @package App\Http\Controllers
 */
class EmpleadoController extends Controller
{
   
    public function index()
    {
        $empleados = Empleado::paginate();

        return view('empleado.index', compact('empleados'))
            ->with('i', (request()->input('page', 1) - 1) * $empleados->perPage());
    }

   
    public function create()
    {
        $empleado = new Empleado();
        $puestos = Puesto::all(); // Obtener todos los puestos

        return view('empleado.create', compact('empleado', 'puestos')); // Pasar los puestos a la vista
    }

    
    public function store(EmpleadoRequest $request)
    {
        Empleado::create($request->validated());

        return redirect()->route('empleados.index')
            ->with('success', 'Empleado created successfully.');
    }

   
    public function show($id)
    {
        $empleado = Empleado::find($id);

        return view('empleado.show', compact('empleado'));
    }

    
    public function edit($id)
    {
        $empleado = Empleado::find($id);

        return view('empleado.edit', compact('empleado'));
    }

   
    public function update(EmpleadoRequest $request, Empleado $empleado)
    {
        $empleado->update($request->validated());

        return redirect()->route('empleados.index')
            ->with('success', 'Empleado updated successfully');
    }

    public function destroy($id)
    {
        Empleado::find($id)->delete();

        return redirect()->route('empleados.index')
            ->with('success', 'Empleado deleted successfully');
    }
}
