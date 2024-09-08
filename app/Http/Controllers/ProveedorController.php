<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnValue;

class ProveedorController extends Controller
{
    public function index()
    {   
        $proveedores = Proveedor::orderby('id', 'asc')           
                    ->paginate(5);                     
        return view('proveedores.index', compact('proveedores'));
    }

    public function create()
    {
        return view('proveedores.create');
    }

    public function show($id)
    {
        
        $proveedor = Proveedor::find($id);
        return $proveedor;
        return view('proveedores.show', compact('id'));
    }
    
}
