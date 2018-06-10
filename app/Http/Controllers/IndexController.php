<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ServiciosIndex;

class IndexController extends Controller
{
    public function index()
    {
        $Servicios = new ServiciosIndex();
        $Servicios = $Servicios->all();
        return view('Index', \compact('Servicios'));
    }

    public function avisoPrivacidad()
    {
        return response()->file(public_path()."/pdf/AVISO DE PRIVACIDAD INNOVA CENTER.pdf");
    }
}
