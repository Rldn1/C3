<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EjemploControlador extends Controller
{

public function index()
    {
        $datos = [
            ["id"=>1, "nombre"=>"Juan", "apellido"=>"Perez"],
            ["id" => 2, "nombre" => "María", "apellido" => "Gómez"],
            ["id" => 3, "nombre" => "Pedro", "apellido" => "López"],
        ];
        return view('index', compact('datos'));
    }
    
}
