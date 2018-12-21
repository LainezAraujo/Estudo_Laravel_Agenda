<?php

namespace App\Http\Controllers;

use App\Pessoa;
use Illuminate\Http\Request;

class PessoasController extends Controller
{
    //método para retorna pessoas
    public function index()
    {
        $list_pessoas = Pessoa::all();
        return view('pessoas.index',[
            'pessoas'=>$list_pessoas
        ]);
    }
}
