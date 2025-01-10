<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function loginProcess(LoginRequest $request)
    {

       $request->validated();

       $authenticated =  Auth::attempt(['email' => $request->email, 'password' => $request->password]);

       if(!$authenticated){

        return back()->withInput()->with('error', 'Login inválido tente novamente');

       }

       return redirect()->route('course.index');

    }

    public function destroy()
    {
        Auth::logout();

        return redirect()->route('login.index')->with('success', 'Deslogado com sucesso');
    }

}
