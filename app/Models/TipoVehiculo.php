<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoVehiculo extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'tipo_vehiculo',
        'precio'
    ];

        /**
     * Devuelve los vehículos de un tipo_vehículo determinado.
     */
    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class, 'tipoVehiculo_id');
    }
}
