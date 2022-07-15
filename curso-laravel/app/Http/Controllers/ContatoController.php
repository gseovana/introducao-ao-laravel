<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    public function index(){
        $contatos = [
           (object) ["nome"=>"Maria", "telefone"=>"123456456"],
           (object) ["nome"=>"Pedro", "telefone"=>"7894561233"]

        ];

        $contato = new Contato();
        $con = $contato->lista();
        dd($con->nome);

        return view('contato.index', compact('contatos'));
    }

    public function criar(Request $req){
        dd($req->all());
        return "Essé é o criar do ContatoController";
    }

    public function editar(){
        return "Essé é o editar do ContatoController";
    }
}
