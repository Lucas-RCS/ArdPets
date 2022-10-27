<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetController extends Controller
{
    public function store(Request $request)
    {
        $pet = [
            $request->input('CreatePetName'),
            $request->input('CreatePetPorte'),
            $request->input('CreatePetIdade')
        ];

        $sql = "insert into pet values (?,?,?)";
        DB::insert($sql,$pet);

        return redirect('/principal');
    }
}
