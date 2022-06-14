<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidato;

class CandidatosController extends Controller
{
    public function index(){
        return view('welcome');
    }

    function criar(Request $info) {
    Candidato::create([
        'name' => $info->nome_candidato,
        'email' => $info->email_candidato,
        'telefone' => $info->telefone_candidato
    ]);    
    echo "<script>alert('CADASTRO INSERIDO NO BANCO DE DADOS.');</script>";
    return view('welcome');
    }

    function mostrar($id_do_candidato){
    $candidato = Candidato::findOrFail($id_do_candidato);
    $u = Candidato::all();
    return view('mostrar-candidato', compact('u'));
    }

    function atualizar($id_do_candidato) {
    $candidato = Candidato::findOrFail($id_do_candidato);
    return view('editar-candidato', ['candidato' => $candidato]);
    }

    function atualizarSave(Request $info, $id_do_candidato) {
    $candidato = Candidato::findOrFail($id_do_candidato);
    $candidato->name = $info->nome_candidato;
    $candidato->email = $info->email_candidato;
    $candidato->telefone = $info->telefone_candidato;
    $candidato->save();
    echo "<script>alert('CANDIDATO SALVO.');</script>";
    return view('welcome');
    }

    function deletar($id_do_candidato) {
    $candidato = Candidato::findOrFail($id_do_candidato);
    $candidato->delete();
    echo "<script>alert('CANDIDATO EXCLUIDO.');</script>";
        return view('welcome');

    }

}
