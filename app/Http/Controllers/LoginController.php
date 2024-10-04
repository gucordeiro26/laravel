<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $erro = '';

        if($request->get('erro') == 1)
        {
            $erro = 'Usuário e/ou Senha não existe(m)';
        }

        return View('site.login', ['página' => 'Página de ', 'erro' => $erro]);
    }

    public function autenticar(Request $request)
    {
        $regras = [
            'email' => 'email',
            'password' => 'required'
        ];

        $feedback = [
            'email.email' => 'O campo usuário (e-mail) é obrigatório',
            'password.required' => 'O campo senha é obrigatório',
        ];

        $request->validate($regras, $feedback);

        /* print_r($request->all()); */

        $email = $request->get('email');
        $password = $request->get('password');

        $user = new User();

        $usuario = $user->where('email', $email)
                        ->where('password', $password)
                        ->get()
                        ->first();

        if(isset($usuario->name))
        {
            session_start();
            $_SESSION['name'] = $usuario->name;
            $_SESSION['email'] = $usuario->email;

            dd($_SESSION);
        } else
        {
            return redirect()->route('site.login', ['erro' => 1]);
        }
    }
}
