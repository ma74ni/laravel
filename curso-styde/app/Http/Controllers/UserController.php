<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {

        $users = [
            'Mary',
            'Joe',
            'Mike',
            'Jo',
            'Bill'
        ];

        return view('usuarios')
            ->with('users', $users)
            ->with('title', 'Listado de usuarios');
    }
    public function show($id) {
        return "Hola usuario: {$id}";
    }
    public function create() {
        return "Crear nuevo usuario";
    }
}
