<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidato;

class CandidatosController extends Controller
{
    public function index()
    {
        $usuarios = Candidato::all();
        return view('index', ['usuarios' => $usuarios]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $info){
        Candidato::create($info->all());
        return redirect()->route('index');
    }

 /*   function criar(Request $info)
    { 
        Candidato::create([ 
            'name' => $info->nome_candidato,
            'email' => $info->email_candidato,
            'telefone' => $info->telefone_candidato
        ]);
        return view('index');
    }
*/
    function mostrar($id_do_candidato)
    {
        $candidato = Candidato::findOrFail($id_do_candidato); // procura o candidato pelo id.
        $usuarios = Candidato::all(); // $usuarios -> é um varíavel que contem todos candidatos que serão exibidos na view
        return view('mostrar-candidato', compact('usuarios')); // compact transforma a váriavel em um array.
    }

    function atualizar($id_do_candidato)
    {
        $candidato = Candidato::findOrFail($id_do_candidato); // se clickar em editar procura pelo id.
        return view('editar-candidato', ['candidato' => $candidato]); // retorna a rota pra fazer a atualização.
    }

    function atualizarSave(Request $info, $id_do_candidato)
    {
        $candidato = Candidato::findOrFail($id_do_candidato);
        $candidato->name = $info->nome_candidato;
        $candidato->email = $info->email_candidato;
        $candidato->telefone = $info->telefone_candidato;
        $candidato->save(); // salva as informações
        echo "<script>alert('CANDIDATO SALVO.');</script>";
        return view('welcome'); // volta pra tela inicial.
    }

    function deletar($id_do_candidato)
    {
        $candidato = Candidato::findOrFail($id_do_candidato);
        $candidato->delete(); // procura pelo id, e deleta a informação.
        echo "<script>alert('CANDIDATO EXCLUIDO.');</script>";
        return view('welcome'); // volta pra tela inicial.

    }
}
