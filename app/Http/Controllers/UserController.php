<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function getUsers($sucursal_id=null)
    {
        $users = User::where('sucursal_id', $sucursal_id)->get();

        return response()->json([
            'users' => $users
        ]);
    }
}
