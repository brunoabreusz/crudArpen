<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Candidato;
use App\Http\Controllers\CandidatosController;

Route::prefix('candidato')->group(
    function () {
        Route::get('/', [CandidatosController::class, 'index'])->name('candidato-index');

        Route::get('/create', [CandidatosController::class, 'create'])->name('candidato-create');

        Route::post('/', [CandidatosController::class, 'store'])->name('candidato-store');

        // Route::get('/mostrar-candidato/{id_do_candidato}', [CandidatosController::class, 'index']);

        // Route::get('/editar-candidato/{id_do_candidato}', [CandidatosController::class, 'atualizar']);

        // Route::put('/atualizar-candidato/{id_do_candidato}', [CandidatosController::class, 'atualizarSave']);

        // Route::get('/excluir-candidato/{id_do_candidato}', [CandidatosController::class, 'deletar']);
    }
);
Route::fallback(function () {
    return "Erro de rota!";
});
