<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgotPasswdController extends Controller
{
    
    public function showForgotPasswd()
    {
        return view('login.forgotPasswd');
    }

    public function submitForgotPasswd(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ],
    [
        'email.required' => 'O campo e-mail é obrigatório',
        'email.email' => 'Preencha um e-mail válido'
        ]);
    }


}
