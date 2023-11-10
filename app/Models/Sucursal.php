<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sucursal extends Model
{
    use HasFactory;

    protected $table = 'sucursals';

    protected $fillable = [
        'name',
        'status',
        'store_wise_topic',
        'delivery_wise_topic',
        'cash_on_delivery',
        'digital_payment',
        'increased_delivery_free',
        'increased_delivery_free_status',
        'increased_delivery_charge_message',
        'offline_payment'
    ];

    public function cajas(): HasMany
    {
        return $this->hasMany(Caja::class);
    }
}
