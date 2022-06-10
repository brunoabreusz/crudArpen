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
    echo "Candidato criado com sucesso!";
});

Route::get('/mostrar-candidato/{id_do_candidato}', function($id_do_candidato){
   $candidato = Candidato::findOrFail($id_do_candidato);
    echo $candidato->name;
    echo "<br/>";
    echo $candidato->email;
    echo "<br/>";
    echo $candidato->telefone;
});

Route::get('/editar-candidato/{id_do_candidato}', function ($id_do_candidato) {
    $candidato = Candidato::findOrFail($id_do_candidato);

});