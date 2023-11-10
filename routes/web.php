<?php

use App\Http\Controllers\EquipamentosController;

Route::get('/', [EquipamentosController::class, 'index']);
Route::get('/equipamentos/create', [EquipamentosController::class, 'create']);
Route::get('/equipamentos/estoque', [EquipamentosController::class, 'stock']);
Route::get('/equipamentos/editar', [EquipamentosController::class, 'edit']);
Route::get('/equipamentos/excluir', [EquipamentosController::class, 'delete']);

Route::post('/equipamentos', [EquipamentosController::class, 'store']);