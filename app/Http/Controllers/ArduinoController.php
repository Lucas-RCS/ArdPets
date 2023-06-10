<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArduinoController extends Controller
{
    public function enviarSinal()
    {
        // Conecte-se à porta do Arduino e envie o sinal
        $porta = '/dev/ttyUSB0'; // porta do Arduino
        $mensagem = '1'; // sinal que você deseja enviar ao Arduino
        
        // Abra a porta serial
        $arduino = fopen($porta, 'w');
        
        // Envie o sinal para o Arduino
        fwrite($arduino, $mensagem);
        
        // Feche a conexão com o Arduino
        fclose($arduino);
        
        return response()->json(['status' => 'success']);
    }
}
