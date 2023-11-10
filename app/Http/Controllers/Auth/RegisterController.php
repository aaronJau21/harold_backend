<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $user = User::create([
            'f_name' => $request->f_name,
            'I_name' => $request->I_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role_id' => $request->role_id,
            'sucursal_id' => $request->sucursal_id,
        ]);

        return response()->json([
            'message' => 'Se creo correctamente',
            'usuario' => $user
        ]);
    }
}
