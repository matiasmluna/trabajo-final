<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class contactoController extends Controller
{
  public function contacto(Request $req){

    $reglas = [
      "nombre"=> "string|min:3|max:30",
      "email"=> "email",
      "mensaje"=> "min:3|max:30"
    ];

    $mensajes = [
      "min"=> "El campo :attribute debe tener un minimo de :min",
      "email"=> "El campo :attribute no tiene el formato correcto",
      "max"=> "El campo :attribute tiene un máximo de :max",
      "string"=> "El campo :attribute debe ser un texto"
    ];

    $this->validate($req, $reglas,$mensajes);

    return view('contacto');
  }

  public function alert(){
    alert()->success('Gracias por comunicarte!','En breve te estaremos respondiendo.');
  }
}
