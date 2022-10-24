<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index() {
        return view('User.index');
    }

    public function create() {
        return view('User.create');
    }

    public function store(Request $request)
    {
        // Pegando as informacoes do usuario
        $username = [
            $request->input('CreateUserName'),
            $request->input('CreateUserCPF'),
            $request->input('CreateUserPasswd')
        ];
        return redirect('/iniciar-sessao');
    }
}
