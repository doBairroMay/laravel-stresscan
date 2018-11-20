<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PessoasController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    } 
    public function index()
    {
        return view('pessoas.lista');
    }
     
    public function novo()
    {
        return view('pessoas.teste');
    }

}
