<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpSerial\PhpSerial; // Importe a biblioteca SerialPort para lidar com a comunicação com a porta serial

class ArduinoController extends Controller
{
    public function enviarSinal(Request $request)
{
    $comPort = '/dev/ttyACM0'; // Porta serial à qual o Arduino está conectado (pode variar)
    $baudRate = 9600; // Taxa de baud do Arduino (deve corresponder ao programa carregado no Arduino)

    $sinal = $request->input('sinal'); // Obtém o sinal enviado pelo formulário

    $serial = new PhpSerial();
    $serial->deviceSet($comPort);
    $serial->confBaudRate($baudRate);
    $serial->confParity("none");
    $serial->confCharacterLength(8);
    $serial->confStopBits(1);
    $serial->confFlowControl("none");
    $serial->deviceOpen();

    // Aguarda até que a porta esteja pronta para ser escrita
    usleep(100000); // Ajuste o tempo de espera conforme necessário

    // Envia o sinal para o Arduino
    $serial->sendMessage($sinal);

    // Realize as operações adicionais, como redirecionar ou retornar uma resposta

    $serial->deviceClose();

    return response()->json(['success' => true]);
}

}
