<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DogController extends Controller
{
    public function index(Request $request) {
        $Dogs = [
          'Bombom',
          'Nala',
          'Lilica'
        ];

        return view('Dog.index')
            ->with('Dogs', $Dogs);
    }

    public function create () {
        return view('Dog.create');
    }
}
