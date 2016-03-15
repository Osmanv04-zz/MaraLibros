<?php

namespace MaraLibros\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PruebaController extends Controller
{
    public function index()
    {
        return "Hola desde el controlador";
    }

    public function nombre($nombre)
    {
        return "Hola soy: ".$nombre;
    }

}
