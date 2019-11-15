<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function store()
    {
        request()->validate([
            'nombre' => 'required',
            'apellido'=> 'required',
            'ci'=> 'required',
            'direccion'=> 'required',
            'celular'=> 'required'

        ],[
            'nombre.required'=>__('I need your name')
        ]);

            Mail::to('albertogallego356@gmail.com')->send(new MessageReceived);
            //return 'Mensaje enviado';
            return request('nombre');
    }
}
