<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Metrica;
use App\Models\Evaluacione;

class Evaluacciondetalle extends Model
{
    protected $fillable = ['evaluacion_id', 'metrica_id', 'valor_obtenido'];

    // Relación con el modelo Metrica
    public function metrica()
    {
        return $this->belongsTo(Metrica::class);
    }

    // Relación con el modelo Evaluacion
    public function evaluacion()
    {
        return $this->belongsTo(Evaluacione::class);
    }
}
