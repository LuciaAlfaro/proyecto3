<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombre',
        'direccion',
        'latitud',
        'longitud',
        'ciudad'
    ];

    /**
     * Devuelve los vehículos de una estacion determinada.
     */
    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class, 'station_id');
    }
}
