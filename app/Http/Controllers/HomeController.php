<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mensagens;

class HomeController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function enviar_mensagem()
    {
        // var_dump($_REQUEST);die;
        $mensagem                   = new Mensagens();
        $mensagem->nome_completo    = $_REQUEST['nome'];
        $mensagem->telefone         = $_REQUEST['telefone'];
        $mensagem->email            = $_REQUEST['email'];
        $mensagem->mensagem         = $_REQUEST['mensagem'];
        $mensagem->save();
    }
}

    
