<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Candidato;
use App\Http\Controllers\CandidatosController;
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

Route::get('/', [CandidatosController::class, 'index']);

Route::post('/cadastrar-candidato', [CandidatosController::class, 'criar']);

Route::get('/mostrar-candidato/{id_do_candidato}', [CandidatosController::class, 'mostrar']);

Route::get('/editar-candidato/{id_do_candidato}', [CandidatosController::class, 'atualizar']);

Route::put('/atualizar-candidato/{id_do_candidato}', [CandidatosController::class, 'atualizarSave']);

Route::get('/excluir-candidato/{id_do_candidato}', [CandidatosController::class, 'deletar']);


