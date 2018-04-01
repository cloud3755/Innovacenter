<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contacto;
use Mail;

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

        $data['foo'] = 'bar';

        Mail::send('layouts.template', $data, function($message)
        {
            $message->to('ilemiranda1@gmail.com', 'Jon Doe')->subject('INTERESADO');
        });

        return response()->json("OK");
    }
}
