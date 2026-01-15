<?php

use App\Http\Controllers\OrcamentoController;
use Illuminate\Support\Facades\Route;

Route::post('/orcamentos', [OrcamentoController::class, 'store']);
Route::get('/orcamentos', [OrcamentoController::class, 'index']);
