<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contacto;
use Mail;
use App\Mail\ConcactoMail;

class ContactoController extends Controller
{
    public function nuevo(Request $request)
    {


        $contact =  new Contacto;
        $contact->Nombre = $request->nombre;
        $contact->Correo = $request->correo;
        $contact->Telefono = $request->telefono;
        $contact->Mensaje = $request->mensaje;
        $contact->FechaHoraCreacion = date('Y-m-d'). 'T' .date('H:i:s');
        $contact->save();

        Mail::to('ilemiranda1@gmail.com','Arturo')
                ->send(new ConcactoMail());


        return response()->json("OK");
    }
}
