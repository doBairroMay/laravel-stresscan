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
        $func = Funcionario::get();
        return view('funcionarios.lista',['func' => $func]);

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

    public function editar($id)
    {
        $f = Funcionario::find($id);
        return view('funcionarios.form', ['f'=>$f]);
    }
    
}
