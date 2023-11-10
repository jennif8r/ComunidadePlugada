<?php

use App\Http\Controllers\EquipamentosController;

Route::get('/', [EquipamentosController::class, 'index']);

Route::get('/contato', [EquipamentosController::class, 'contato']);  


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('/welcome');
    })->name('dashboard');

    Route::get('/equipamentos/create', [EquipamentosController::class, 'create']);
    Route::get('/equipamentos/estoque', [EquipamentosController::class, 'stock']);
    Route::get('/equipamentos/editar/{id}', [EquipamentosController::class, 'edit'])->name('equipamentos.editar');
    Route::put('/equipamentos/editar/{id}', [EquipamentosController::class, 'update'])->name('equipamentos.atualizar');
    Route::get('/equipamentos/excluir/{id}', [EquipamentosController::class, 'confirmDelete'])->name('equipamentos.confirmarExclusao');
    Route::delete('/equipamentos/excluir/{id}', [EquipamentosController::class, 'destroy'])->name('equipamentos.excluir');
    Route::post('/equipamentos', [EquipamentosController::class, 'store']);
});
