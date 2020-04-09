<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {

        if(request()->has('empty')) {
             $users = [];
        } else {
            $users = [
                'Mary','Joe','Mike','Jo','Bill'
            ];
        }

        return view('usuarios')
            ->with('users', $users)
            ->with('title', 'Listado de usuarios');
    }
    public function show($id) {
        return view('usuario')
            ->with('id', $id)
            ->with('title', 'Bienvenid@');
    }
    public function create() {
        return "Crear nuevo usuario";
    }
}
