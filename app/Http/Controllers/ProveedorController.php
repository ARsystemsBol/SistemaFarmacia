<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPUnit\Framework\returnValue;

class ProveedorController extends Controller
{
    public function index()
    {
        return view('proveedores.index');
    }

    public function create()
    {
        return view('proveedores.create');
    }

    public function show($id)
    {
        return view('proveedores.show', compact('id'));
    }
    
}
