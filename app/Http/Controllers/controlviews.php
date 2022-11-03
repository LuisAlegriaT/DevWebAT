<?php

namespace App\Http\Controllers;
use App\Http\Requests\validarForms;

class controlviews extends Controller{
    public function verArts(){
        return view('articulos');
    }

    public function verPromos(){
        return view('promo');
    }  

    public function verReseñas(){
        return view('reseñas');
    }

    
    public function recibeReseña(validarForms $req){


       return redirect('reseñas')->with('Enviado','Recibido');

    }
}
