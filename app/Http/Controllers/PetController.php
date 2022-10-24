<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetController extends Controller
{
    public function store(Request $request)
    {
        $pet = [
           "PetName" => $request->input('CreatePetName'),
            "PetPorte" => $request->input('CreatePetPorte'),
            "PetIdade" => $request->input('CreatePetIdade')
            ];
        return redirect('/principal');
    }
}
