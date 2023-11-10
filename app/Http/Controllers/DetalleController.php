<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Detalle;
use Illuminate\Http\Request;

class DetalleController extends Controller
{
    public function getDetalles()
    {
        $detalles = Detalle::get();

        return response()->json([
            'detalles' => $detalles
        ]);
    }
}
