<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function getUsers()
    {
        $users = User::get();

        return response()->json([
            'users' => $users
        ]);
    }
}
