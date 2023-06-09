<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request)
    {

        // coleta de dados no json
        $FileContent = file_get_contents('UserJson.json');
        $UserJson = json_decode($FileContent);

        // verificar id, id invalido volta para a tela de login
        if ($UserJson->id == -1)
            return to_route('User.Index');

        //buscar dados no mysql
        $Sql = "Select nome,porte,idade from pets where id_dono=?";

        //Msg de sucesso
        $MsgSucesso = $request->session()->get('Msg.Sucesso');

        if (DB::select($Sql, [$UserJson->id]) != null) {
            $Pet = DB::select($Sql, [$UserJson->id]);
            return view('HomePage.Index')
                ->with('Pets', $Pet)
                ->with('MensagemSucesso', $MsgSucesso);
        } else {
            $Pet = DB::select($Sql,[1]);
            return view('HomePage.Index')
                ->with('Pets', $Pet)
                ->with('MensagemSucesso', $MsgSucesso);
        }

    }

    public function logout()
    {
        //transforma o id do json para -1 assim voltando para a tela de login
        $Aux = array("id" => -1);
        $AuxJson = json_encode($Aux);
        $file = fopen('UserJson.json', 'w');
        fwrite($file, $AuxJson);

        return to_route('User.Index');
    }

    public function update(Request $request)
    {
        $FileContent = file_get_contents('UserJson.json');
        $UserJson = json_decode($FileContent);

        $User = [
            $request->UpdateUserEmail,
            $request->UpdateUserPasswd,
            $UserJson->id
        ];
        $Sql = "update dono set email=?, senha=? where id=?";
        DB::update($Sql,$User);
        $request->session()->flash('Msg.Sucesso',"Alterado com sucesso!");
        return to_route('HomePage.Index');
    }


}
