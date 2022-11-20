<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $MsgSucesso = $request->session()->get('Msg.Sucesso');
        return view('User.Index')->with('MensagemSucesso',$MsgSucesso);
    }

    public function create()
    {
        return view('User.Create');
    }

    public function store(Request $request)
    {

        // Pegando as informacoes do usuario
        $User = [
            $request->CreateUserEmail,
            $request->CreateUserPasswd
        ];

        $Sql = "insert into dono (email,senha) values (?,?)";
        DB::insert($Sql, $User);
        $request->session()->flash('Msg.Sucesso',"Conta criado com sucesso!");
        return to_route('User.Index');
    }

    public function login(Request $request)
    {
        $User = [$request->IndexUserEmail];
        $Sql = "select id,email,senha from dono where email=?";
        $NewNome = DB::select($Sql, $User);

        $request->session()->flash('Msg.Fail','Conta nao existe');

        foreach ($NewNome as $name) {
            $Aux = array("id" => $name->id);
            $AuxJson = json_encode($Aux);
            $file = fopen('UserJson.json', 'w');
            fwrite($file, $AuxJson);

            if ($name->email == $request->IndexUserEmail && $name->senha == $request->IndexUserPasswd)
                return to_route('HomePage.Index');
            else
                return to_route('User.Index');
        }
    }
}
