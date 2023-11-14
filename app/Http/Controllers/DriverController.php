<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\DriverRequest;
use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function storeDriver(DriverRequest $request)
    {
        $driver = Driver::create([
            'f_name' => $request->f_name,
            'l_name' => $request->l_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'sucursal_id' => $request->sucursal_id,
            'busine_id' => $request->busine_id
        ]);

        return response()->json([
            'message' => 'The Driver was created successfully',
            'driver' => $driver
        ]);
    }

    public function getDriver($sucursal_id = null)
    {
        $drivers = Driver::where('sucursal_id', $sucursal_id)->get();

        return response()->json([
            'drivers' => $drivers
        ]);
    }

    public function getDriverSelect()
    {
        $drivers = Driver::get();

        return response()->json([
            'drivers' => $drivers
        ]);
    }
}
