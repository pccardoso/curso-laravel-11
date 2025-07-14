<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
 
    public function store(){

        $result = User::create([
            "name" => "Paulo Cesar",
            "email" => "paulo.fff@gmail.com",
            "password" => "P@ulo123"
        ]);

        return response()->json([
            "status" => 200,
            "message" => "Usuário cadastrado com sucesso",
            "usuario" => $result
        ], 200);

    }

    public function show(){

        $result = User::all();

        return view("usuarios", compact("result"));
    }

}
