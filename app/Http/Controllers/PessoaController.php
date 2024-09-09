<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function index(){
        return \App\Models\Pessoa::all();
    }

    public function store(Request $request){
        $pessoa = new Pessoa();
        $pessoa->nome = $validatedData['nome'];
        $pessoa->cpf = $validatedData['cpf'];
        $pessoa->tel = $validatedData['tel'];
        $pessoa->save();

        // Retorno de sucesso
        return response()->json(['message' => 'Pessoa cadastrada com sucesso!'], 201);
    }
}
