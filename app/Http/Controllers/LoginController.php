<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(Request $request) {
        return view('User.index');
    }

    public function create() {
        return view('User.create');
    }

    public function store(Request $request) {

        // Pegando as informacoes do usuario
        $user = [
            $request->input('CreateUserName'),
            $request->input('CreateUserCPF'),
            $request->input('CreateUserPasswd')
        ];

        $Sql = "insert into dono (nome,cpf,senha) values (?,?,?)";
        DB::insert($Sql,$user);
        return redirect('/iniciar-sessao');
    }

    public function login(Request $request) {
        $nome = [$request->input('IndexUserName')];
        $Sql = "select nome from dono where nome=?";
         $NewNome = DB::select($Sql,$nome);
         echo $NewNome[0];

    }
}
