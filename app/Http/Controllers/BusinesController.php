<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Busine;
use Illuminate\Http\Request;

class BusinesController extends Controller
{
    public function getBusines($sucursal_id = 0)
    {
        $busines = Busine::where('sucursal_id', $sucursal_id)->get();

        return response()->json([
            'sucursales' => $busines
        ]);
    }
}
