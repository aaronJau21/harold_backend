<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;
    protected $table = 'drivers';

    protected $fillable = [
        'f_name',
        'l_name',
        'phone',
        'email',
        'identity_number',
        'identity_type',
        'identity_image',
        'image',
        'password',
        'fcm_tokem',
        'sucursal_id',
        'status',
        'active',
        'earning',
        'current_orders',
        'type',
        'store_id',
        'application_status',
        'order_count',
        'assigned_order_count',
        'vehicle_id',
        'busine_id'
    ];


}
