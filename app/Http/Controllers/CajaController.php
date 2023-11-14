<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Caja;
use App\Models\Driver;
use Illuminate\Http\Request;
use App\Models\CajaRepartidor;
use App\Http\Requests\CajaRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\CajaRepartidorRequest;
use App\Models\Detalle;

class CajaController extends Controller
{
    public function caja(CajaRequest $request)
    {
        $caja = Caja::create([
            'fecha' => $request->fecha,
            'montoApertura' => $request->montoApertura,
            'salidaEfectivo' => 0.00,
            'sucursal_id' => $request->sucursal_id,
            'usuario_id' => $request->usuario_id,
            'cerrada' => 0
        ]);

        return response()->json([
            'message' => 'It was created successfully',
            'caja' => $caja
        ]);
    }


    public function caja_repartidor(CajaRepartidorRequest $request)
    {
        $zona_horaria = 'America/New_York';

        // Crea una nueva instancia de Carbon con la zona horaria especificada
        $hora_actual = Carbon::now($zona_horaria)->format('H:i:s');

        $caja_repartidor = CajaRepartidor::create([
            'driver_id' => $request->driver_id,
            'monto' => $request->monto,
            'hora' => $hora_actual,
            'observaciones' => $request->observaciones,
            'pagado' => 0,
            'detalle_id' => $request->detalle_id,
            'createBy' => $request->createBy,
            'payBy' => $request->payBy,
            'fecha' => $request->fecha,
            'busine_id' => $request->has('busine_id') ? $request->busine_id : null
        ]);

        return response()->json([
            'caja repartidor' => $caja_repartidor
        ]);
    }

    public function get_caja_repartidor()
    {
        $caja_repartidores = CajaRepartidor::get();
        $result = [];

        foreach ($caja_repartidores as $caja_repartidore) {

            $driver_name = Driver::where('id', $caja_repartidore->driver_id)->select('f_name')->first();
            $detalle_name = Detalle::where('id', $caja_repartidore->detalle_id)->select('name')->first();
            $caja_repartidore->driver_id = $driver_name->f_name;
            $caja_repartidore->detalle_id = $detalle_name->name;
            $result[] = [
                'id' => $caja_repartidore->id,
                'repartidor' => $caja_repartidore->driver_id,
                'monto' =>  $caja_repartidore->monto,
                'hora' => $caja_repartidore->fecha,
                'detalle_id' => $caja_repartidore->detalle_id,
                'estado' => $caja_repartidore->pagado,
                'observaciones' => $caja_repartidore->observaciones,
                'hora' => $caja_repartidore->fecha,
                'createBy' => $caja_repartidore->createBy,
                'payBy' => $caja_repartidore->payBy
            ];
        };

        return response()->json([
            'body' => $result,
        ]);
    }

    public function updateEstado(Request $request, $id)
    {
        $caja_repartidor = CajaRepartidor::find($id);
        $caja_repartidor->update([
            'pagado' => 1,
            'payBy' => $request->payBy
        ]);
        return response()->json([
            'caja_repartidor' => $caja_repartidor
        ]);
    }

    public function delete($id)
    {
        $caja_repartidor = CajaRepartidor::find($id);
        $caja_repartidor->delete();
    }

    public function buscar($fecha = null, $sucursal = null)
    {
        if (!$fecha || !$sucursal) {
            $fecha = now()->toDateString(); // Obtener la fecha actual en formato YYYY-MM-DD
            $sucursal = $sucursal ?? 1; // Utilizar el valor proporcionado o 1 por defecto
        }
        $datos = Caja::where('fecha', $fecha)
            ->where('sucursal_id', $sucursal)
            ->get();
        // Puedes devolver o manipular los datos según tus necesidades
        return $datos;
    }
}
