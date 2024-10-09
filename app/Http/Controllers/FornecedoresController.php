<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedoresController extends Controller
{
    public function index()
    {
        return View('site.fornecedor.index', ['pagina' => 'Página de ']);
    }

    public function listar(Request $request)
    {
        $fornecedores = Fornecedor::query();

        if ($request->filled('nome')) {
            $fornecedores->where('nome', 'like', '%' . $request->input('nome') . '%');
        }

        if ($request->filled('site')) {
            $fornecedores->where('site', 'like', '%' . $request->input('site') . '%');
        }

        if ($request->filled('uf')) {
            $fornecedores->where('uf', 'like', '%' . $request->input('uf') . '%');
        }

        if ($request->filled('email')) {
            $fornecedores->where('email', 'like', '%' . $request->input('email') . '%');
        }

        $fornecedores = $fornecedores->cursorPaginate(10);

        return view('site.fornecedor.listar', ['pagina' => 'Página de ', 'fornecedores' => $fornecedores]);
    }

    public function adicionar(Request $request)
    {
        $msg = '';

        if($request->input('_token') != '' && $request->input('id') == '')
        {
            $regras = [
                'nome' => 'required|min:3|max:40',
                'site' => 'required',
                'uf' => 'required|min:2|max:2',
                'email' => 'email',
            ];

            $feedback = [
                'nome.required' => 'O campo nome precisa ser preenchido',
                'nome.min' => 'O campo nome precisa ter no mínimo 3 caracteres',
                'nome.max' => 'O campo nome precisa ter no máximo 40 caracteres',
                'site.required' => 'O campo site precisa ser preenchido',
                'uf.required' => 'O campo uf precisa ser preenchido',
                'uf.min' => 'O campo uf precisa ter no mínimo 2 caracteres',
                'uf.max' => 'O campo uf precisa ter no máximo 2 caracteres',
                'email.email' => 'O campo email não é válido'
            ];

            $request->validate($regras, $feedback);

            $fornecedor = new Fornecedor();
            $fornecedor->create($request->all());

            $msg = 'Cadastro realizado com sucesso!';
        }

        if($request->input('_token') != '' && $request->input('id') != '')
        {
            $fornecedor = Fornecedor::find($request->input('id'));
            $update = $fornecedor->update($request->all());

            if($update)
            {
                $msg = 'Cadastro atualizado com sucesso!';
            } else {
                $msg = 'Erro ao atualizar o cadastro!';
            }
        }

        return View('site.fornecedor.adicionar', ['pagina' => 'Página de ']);
    }

    public function editar($id)
    {
        $fornecedor = Fornecedor::find($id);

        return View('site.fornecedor.adicionar', ['pagina' => 'Página de ', 'fornecedor' => $fornecedor]);
    }

    public function excluir($id)
{
    $fornecedor = Fornecedor::find($id);

    if ($fornecedor) {
        $fornecedor->delete();
        $msg = 'Fornecedor excluído com sucesso!';
    } else {
        $msg = 'Fornecedor não encontrado!';
    }

    return redirect()->route('app.fornecedor')->with('msg', $msg);
}

}
