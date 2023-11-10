<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\loginRequest;
use App\Models\Role;
use App\Models\Sucursal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function login(loginRequest $request)
    {
        $data = $request->validated();
        if (!Auth::attempt($data)) {
            return response([
                'errors' => 'Invalid Credentials'
            ], 422);
        }

        $user = Auth::user();
        $rol = Role::where('id', $user->role_id)->first();
        $sucursal = Sucursal::where('id', $user->sucursal_id)->first();

        return response()->json([
            'message' => 'Welcome',
            'statusCode' => 200,
            'body' => [
                'activo' => true,
                'apellidos'  => $user->I_name,
                'email'  => $user->email,
                'id'  => $user->id,
                'initPage'  => '/caja/registro/',
                'nombres' => $user->f_name,
                'rol' => [
                    'id' => $user->role_id,
                    'nombre' => $rol->nombre
                ],
                'sucursal' => [
                    'id' => $sucursal->name,
                    'nombre' => $sucursal->name,
                    'activo'=> true
                ]
            ]
        ]);
    }
}
