<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlantillaController extends Controller
{
    public function __invoke()
    {
        return view('layouts.plantilla');
    }
}
