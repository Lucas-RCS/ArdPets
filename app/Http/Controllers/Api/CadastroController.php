<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function status(){
        return ['status: ' => 'olá',
                'status: '=> 'tem uma API funcionando aqui'];
    }
}
