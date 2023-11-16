<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $connection = 'yalodb_sv';
    protected $table = 'admins';

    protected $filable = [
        'f_name',
        'l_name',
        'phone',
        'email',
        'image',
        'password',
        'created_at',
        'zone_id'
    ];
}
