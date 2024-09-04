<?php

//GET 
//POST
//PUT => PETICIONES POST PARA ACTUALIZAR UN REGISTRO
//PATCH => PETICIONES POST PARA ACTUALIZAR UN REGISTRO
//DELETE => PETICIONES POST PARA ELIMINAR UN REGISTRO

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PlantillaController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\PrincipioActivoController;
use App\Models\Proveedor;

// LOGIN
Route::get('/', LoginController::class);

// PLANTILLA DE EJEMPLO
Route::get('/plantilla', PlantillaController::class);

// DASHBOARD
Route::get('/dashboard', DashboardController::class);

// PROVEEDORES
Route::get('/proveedor', [ProveedorController::class, 'index']);  
Route::get('/proveedor/create', [ProveedorController::class, 'create']); 
Route::get('/proveedor/{id}', [ProveedorController::class, 'show']);

// PRINCIPIO ACTVIO
Route::get('/pactivo', [PrincipioActivoController::class, 'index']);  
Route::get('/pactivo/create', [PrincipioActivoController::class, 'create']); 
Route::get('/pactivo/{id}', [PrincipioActivoController::class, 'show']);

// Ruta de prueba CRUD
Route::get('prueba', function(){
    
    //CREAR NUEVO PROVEEDOR
    // $Proveedor = new Proveedor;
    // $Proveedor-> proveedor = 'Laboratorios Bago de Bolivia S.A.';
    // $Proveedor-> lab = 'BAGÓ';
    // $Proveedor-> contacto = 'Of. Central';
    // $Proveedor-> telefono = '2770110';
    // $Proveedor-> email = 'bolivia@bago.com.bo';
    // $Proveedor-> direccion = 'Av. Costanera # 1000 Edif. Costanera T.1, P-4';
    // $Proveedor-> nit = 1020503020;
    // $Proveedor-> nocuenta = '';
    // $Proveedor-> banco = '';
    // $Proveedor-> tcuenta = '';
    // $Proveedor-> usuario_id = 1;

    // $Proveedor->save();
    
    // return $Proveedor;

    // VER TODOS LOS PROVEEDORES
        //manera general
        // $Proveedor = Proveedor::all();
        
        //filtrar por algun criterio
        // $Proveedor = Proveedor::where('nocuenta', '=' , '' )
        //             ->orderby('id', 'asc') // ordenar por algoun criterio
        //             ->select('id','lab') // los campos que queremos ver
        //             ->take(2) // la cantidad de registros que queremos ver
        //             ->get();
        // return $Proveedor;

         //filtrar por algun criterio, opciones
        //  $Proveedor = Proveedor::select('id', 'lab' , 'nocuenta', 'tcuenta')         
        //                         ->get();
        //     return $Proveedor;



    // // VER PROVEEDOR
    // $Proveedor = Proveedor::find(1);
    // return $Proveedor;


    // // // ACTUALIZAR PROVEEDOR - EJEMPO CONICIDIR NIT
    // $Proveedor = Proveedor::find(5);
    // // $Proveedor = Proveedor::where('nit',100704502)
    // //             ->first();

    // $Proveedor -> contacto = 'Of. central La Paz';
    // $Proveedor -> telefono = '2788060';
    // $Proveedor -> email = 'pablo.collao@vita.com.bo';
    // $Proveedor -> direccion = 'Av. Hector Ormachea 320 Obrajes';
    // $Proveedor -> nit = 1020711029;

    // $Proveedor->save();
    //  return $Proveedor;

    // ELIMINAR UN REGISTRO
    // $Proveedor = Proveedor::find(6);
    // $Proveedor->delete();

    // return  'Registro Eliminado';

});