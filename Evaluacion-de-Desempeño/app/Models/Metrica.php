<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Metrica extends Model
{
    protected $perPage = 20;

    protected $fillable = ['nombre', 'descripcion', 'categoria_id', 'tipo', 'valor_minimo', 'valor_maximo'];

    // Relación inversa con Evaluacciondetalle (opcional si necesitas acceder desde Metrica a Evaluacciondetalle)
    public function detalles()
    {
        return $this->hasMany(Evaluacciondetalle::class, 'metrica_id', 'id');
    }
}
