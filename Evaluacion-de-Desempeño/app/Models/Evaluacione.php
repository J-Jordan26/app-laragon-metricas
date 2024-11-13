<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Empleado;

class Evaluacione extends Model
{
    protected $perPage = 20;

    protected $fillable = ['empleado_id', 'fecha_evaluacion', 'puntaje', 'observaciones'];

    // Relación con el modelo Empleado (una evaluación pertenece a un empleado)
    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }

  
}
