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

        \Session::flash('mensagem_sucesso','Funcionário cadastrado com sucesso');
        return Redirect::to('funcionarios/novo');
    }

    public function editar($id)
    {
        $f = Funcionario::findOrFail($id);
        return view('funcionarios.form', ['f'=>$f]);
    }
    
    public function atualizar($id, Request $request)
    {
        $f = Funcionario::findOrFail($id);
        $f->update($request->all()); 
       /* \Session::flash('mensagem_sucesso','Funcionário cadastrado com sucesso');*/
        return view('funcionarios.form', ['f'=>$f]);
        
    }
    
    public function excluir($id)
    {
        $f = Funcionario::findOrFail($id);
        $f->delete(); 
       /* \Session::flash('mensagem_sucesso','Funcionário cadastrado com sucesso');*/
        return view('funcionarios');
        
    }
}
