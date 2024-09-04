<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\ContatoModel;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {
        $contato = new ContatoModel();

        $contato->create($request->all());
        
        $contato->nome = $request->input('nome');
        $contato->email = $request->input('email');
        $contato->mensagem = $request->input('mensagem');
        $contato->telefone = $request->input('telefone');
        $contato->motivo_contato = $request->input('motivo_contato');

        return View('site.contato');
    }

    public function salvar(Request $request)
    {
        $request->validate([
            'nome' -> 'required|min:3|max:100',
            'email' -> 'email',
            'telefone' -> 'required|min:9|max:20',
            'motivo_contato' -> 'required',
            'mensagem' -> 'required|max:2000',
        ]);

        ContatoModel::create($request->all());
    }
}
