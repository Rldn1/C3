<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EjemploControlador;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ejemplo', [EjemploControlador::class, 'index']);