<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contacto;

class ContactoController extends Controller
{
    public function nuevo(Request $request)
    {
        $contact =  new Contacto;
        $contact->Nombre = $request->nombre;
        $contact->Telefono = $request->telefono;
        $contact->Mensaje = $request->mensaje;
        $contact->Correo = $request->correo;
        $contact->FechaHoraCreacion = date('Y-m-d'). 'T' .date('H:i:s');
        $contact->save();
        return response()->json("OK");
    }
}
