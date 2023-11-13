<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetController extends Controller
{
    public function index()
    {
        return 'Olá cachorrada';
    }


    public function store(Request $request){
         // Pega todos os os paramentros do body quando enviado
        $data = $request->all();

        // Pega apenas o input descrito
        $name = $request->input('name');
    }
}
