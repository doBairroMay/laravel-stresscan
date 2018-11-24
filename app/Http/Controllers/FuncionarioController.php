<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionario;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class FuncionarioController extends Controller
{

    public function index()
    {
        $funcionarios = Funcionario::get();
        return view('funcionarios.lista');

    }

    public function novo()
    {
        return view('funcionarios.form');
    }
    
    public function salvar(Request $request)
    {
        $funcionario = new Funcionario(); 
        $funcionario = $funcionario->create($request->all());

        \Session::flash('mensagem_sucesso','cliente cadastrado com sucesso');
        return Redirect::to('funcionarios/novo');
    }
}
