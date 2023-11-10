<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Sucursal;
use Illuminate\Http\Request;

class SucursalController extends Controller
{
    public function getSucursal()
    {
        $sucursal = Sucursal::get();

        return response()->json([
            'sucursal' => $sucursal
        ]);
    }
}
