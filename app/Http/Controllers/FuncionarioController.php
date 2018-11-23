<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionario;
use App\Http\Requests;

class FuncionarioController extends Controller
{

    public function index()
    {
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
        return $funcionario;
    }
}
