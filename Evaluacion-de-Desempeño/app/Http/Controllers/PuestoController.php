<?php

namespace App\Http\Controllers;

use App\Models\Puesto;
use App\Http\Requests\PuestoRequest;

/**
 * Class PuestoController
 * @package App\Http\Controllers
 */
class PuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $puestos = Puesto::paginate();

        return view('puesto.index', compact('puestos'))
            ->with('i', (request()->input('page', 1) - 1) * $puestos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $puesto = new Puesto();
        return view('puesto.create', compact('puesto'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PuestoRequest $request)
    {
        Puesto::create($request->validated());

        return redirect()->route('puestos.index')
            ->with('success', 'Puesto created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $puesto = Puesto::find($id);

        return view('puesto.show', compact('puesto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $puesto = Puesto::find($id);

        return view('puesto.edit', compact('puesto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PuestoRequest $request, Puesto $puesto)
    {
        $puesto->update($request->validated());

        return redirect()->route('puestos.index')
            ->with('success', 'Puesto updated successfully');
    }

    public function destroy($id)
    {
        Puesto::find($id)->delete();

        return redirect()->route('puestos.index')
            ->with('success', 'Puesto deleted successfully');
    }
}
