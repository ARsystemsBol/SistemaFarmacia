<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipioActivoController extends Controller
{
    public function index()
    {
        return "Lista de Principio Activo";
    }

    public function create()
    {
        return "Formulario de registro de Principio Activo";
    }

    public function show($id)
    {
        return "Muestra el principio activo con id: {$id}";
    }
}
