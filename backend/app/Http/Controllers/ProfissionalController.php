<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profissionais;

class ProfissionalController extends Controller
{
    //

    public function listaProfissionais(Request $request){
        $listaProfissionais = Profissionais::all();

        return response()->json($listaProfissionais);
    }
    public function criarProfissional(Request $request){
        $newProfissional = new Profissional();
        $newProfissional->nome = $request->nome;
        $newProfissional->github = $request->github;
        $result = $newProfissional->save();

        return response()->json($newProfissional);
    }
}
