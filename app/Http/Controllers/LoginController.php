<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $MsgSucess = $request->session()->get('Msg.Sucess');
        $MsgWarning = $request->session()->get('Msg.Warning');
        return view('User.Index')
            ->with('MensagemSucess',$MsgSucess)
            ->with('MensagemWarning',$MsgWarning);
    }

    public function create(Request $request)
    {
        $MsgWarning = $request->session()->get('Msg.Warning');
        return view('User.Create')
            ->with('MensagemWarning',$MsgWarning);
    }

    public function store(Request $request)
    {

        // Pegando as informacoes do usuario
        $AuxUser = [$request->CreateUserEmail];
        $User = [
            $request->CreateUserEmail,
            $request->CreateUserPasswd
        ];
        $Sql = "select id,email,senha from dono where email=?";

        if (DB::select($Sql, $AuxUser) != null) {
            $request->session()->flash('Msg.Warning',"Conta email já cadastrado!");
            return to_route('User.Create');
        } else {
            $Sql = "insert into dono (email,senha) values (?,?)";
            DB::insert($Sql, $User);
            $request->session()->flash('Msg.Sucess',"Conta criado com sucesso!");
            return to_route('User.Index');
        }
    }

    public function login(Request $request)
    {
        $User = [$request->IndexUserEmail];
        $Sql = "select id,email,senha from dono where email=?";
        $NewNome = DB::select($Sql, $User);


        if ($NewNome != null)
        foreach ($NewNome as $name) {
            $Aux = array("id" => $name->id);
            $AuxJson = json_encode($Aux);
            $file = fopen('UserJson.json', 'w');
            fwrite($file, $AuxJson);

            if ($name->email == $request->IndexUserEmail && $name->senha == $request->IndexUserPasswd)
                return to_route('HomePage.Index');
            else {
                 $request->session()->flash('Msg.Warning','Email ou senha incorretos!');
                return to_route('User.Index');
            }
        }
        else {
                $msg = $request->session()->flash('Msg.Warning','Conta não registrada!');
                return to_route('User.Index');
            }

    }
}
