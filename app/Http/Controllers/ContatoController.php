<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\ContatoModel;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {
        return View('site.contato');
    }

    public function salvar(Request $request)
    {
        $regras = [
            'nome' => 'required|min:3|max:40',
            'email' => 'email',
            'telefone' => 'required|min:9|max:20',
            'motivo_contato' => 'required',
            'mensagem' => 'required|max:2000',
        ];
        $feedback = [
            'nome.required' => 'O campo nome precisa ser preenchido',
            'nome.min' => 'O campo nome precisa ter no mínimo 3 caracteres',
            'nome.max' => 'O campo nome precisa ter no máximo 100 caracteres',
            'telefone.required' => 'O campo telefone precisa ser preenchido',
            'telefone.min' => 'O campo telefone precisa ter no mínimo 9 caracteres',
            'telefone.max' => 'O campo telefone precisa ter no máximo 20 caracteres',
            'motivo_contato.required' => 'O campo motivo do contato precisa ser preenchido',
            'mensagem.required' => 'O campo mensagem precisa ser preenchido',
            'mensagem.required' => 'O campo mensagem precisa ter no máximo 2000 caracteres',
        ];

        $request->validate($regras, $feedback);
        
        ContatoModel::create($request->all());
        return redirect()->route('site.principal');
    }
}
