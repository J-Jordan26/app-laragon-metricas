<?php

namespace App\Http\Controllers;

use App\Models\Metrica;
use App\Models\Categoria; // Importar el modelo Categoria
use App\Http\Requests\MetricaRequest;

/**
 * Class MetricaController
 * @package App\Http\Controllers
 */
class MetricaController extends Controller
{
   
    public function index()
    {
        $metricas = Metrica::paginate();

        return view('metrica.index', compact('metricas'))
            ->with('i', (request()->input('page', 1) - 1) * $metricas->perPage());
    }

   
    public function create()
    {
        $metrica = new Metrica();
        $categorias = Categoria::all(); // Obtener todas las categorías
        return view('metrica.create', compact('metrica', 'categorias'));
    }

    
    public function store(MetricaRequest $request)
    {
        Metrica::create($request->validated());

        return redirect()->route('metricas.index')
            ->with('success', 'Metrica created successfully.');
    }

   
    public function show($id)
    {
        $metrica = Metrica::find($id);

        return view('metrica.show', compact('metrica'));
    }

    
    public function edit($id)
    {
        $metrica = Metrica::find($id);

        return view('metrica.edit', compact('metrica'));
    }

    
    public function update(MetricaRequest $request, Metrica $metrica)
    {
        $metrica->update($request->validated());

        return redirect()->route('metricas.index')
            ->with('success', 'Metrica updated successfully');
    }

    public function destroy($id)
    {
        Metrica::find($id)->delete();

        return redirect()->route('metricas.index')
            ->with('success', 'Metrica deleted successfully');
    }
}
