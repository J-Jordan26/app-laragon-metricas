<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\Evaluacione;
use App\Models\Metrica;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $empleados = Empleado::all();
        $metricas = Metrica::all();

        // Filtrar las evaluaciones por empleado y métrica
        $empleadoId = $request->input('empleado_id');
        $metricaId = $request->input('metrica_id');

        $query = Evaluacione::query();

        if ($empleadoId) {
            $query->where('empleado_id', $empleadoId);
        }

        // Obtener todas las evaluaciones filtradas
        $evaluaciones = $query->get();

        return view('home', compact('empleados', 'metricas', 'evaluaciones'));
    }
}

