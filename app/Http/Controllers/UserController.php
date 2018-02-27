<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return 'Usuarios';
    }

    public function show($id) {
        return "Usuario {$id}";
    }

    public function create() {
        return "Crear un usuario";
    }
}
