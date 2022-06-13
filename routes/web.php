<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Candidato;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/cadastrar-candidato', function (Request $info) {
    Candidato::create([
        'name' => $info->nome_candidato,
        'email' => $info->email_candidato,
        'telefone' => $info->telefone_candidato
    ]);    
    echo "<script>alert('CADASTRO INSERIDO NO BANCO DE DADOS.');</script>";
    return view('welcome');
});

Route::get('/mostrar-candidato/{id_do_candidato}', function($id_do_candidato){
   $candidato = Candidato::findOrFail($id_do_candidato);
    $u = Candidato::all();
    return view('mostrar-candidato', compact('u'));
});

Route::get('/editar-candidato/{id_do_candidato}', function ($id_do_candidato) {
    $candidato = Candidato::findOrFail($id_do_candidato);
    return view('editar-candidato', ['candidato' => $candidato]);

});

Route::put('/atualizar-candidato/{id_do_candidato}', function (Request $info, $id_do_candidato) {
    $candidato = Candidato::findOrFail($id_do_candidato);
    $candidato->name = $info->nome_candidato;
    $candidato->email = $info->email_candidato;
    $candidato->telefone = $info->telefone_candidato;
    $candidato->save();
    echo "<script>alert('CANDIDATO SALVO.');</script>";

});

Route::get('/excluir-candidato/{id_do_candidato}',  function ($id_do_candidato) {
    $candidato = Candidato::findOrFail($id_do_candidato);
    $candidato->delete();
    echo "<script>alert('CANDIDATO EXCLUIDO.');</script>";

});



// Só as rotas
// Olhar o de marcos
