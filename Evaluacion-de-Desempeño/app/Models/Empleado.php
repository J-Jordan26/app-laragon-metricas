<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Evaluacione;
use App\Models\Puesto;

/**
 * Class Empleado
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $puesto_id
 * @property $departamento_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleado extends Model
{
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'apellido', 'puesto_id', 'departamento_id'];

    // Relación con el modelo Puesto (muchos empleados pertenecen a un puesto)
    public function puesto()
    {
        return $this->belongsTo(Puesto::class);
    }

    // Relación con el modelo Evaluacione (un empleado tiene muchas evaluaciones)
    public function evaluaciones()
    {
        return $this->hasMany(Evaluacione::class, 'empleado_id', 'id');
    }
}



