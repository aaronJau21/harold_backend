<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CajaRepartidor extends Model
{
    use HasFactory;

    protected $table = 'asignacion_caja_repartidores';
    protected $fillable = [
        'monto',
        'hora',
        'detalle_id',
        'observaciones',
        'pagado',
        'createBy',
        'payBy',
        'driver_id',
        'businessMandaditosId',
        'fecha',
        'sucursal_id',
        'busine_id'
    ];


    public function driver(): HasOne
    {
        return $this->hasOne(Driver::class);
    }

    public function detalle(): HasOne
    {
        return $this->hasOne(Detalle::class);
    }
}
