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

