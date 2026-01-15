<?php

namespace App\Http\Controllers;

use App\Models\Orcamento;
use Illuminate\Http\Request;

class OrcamentoController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'celular' => 'required|string|max:20',
            'data_ida' => 'nullable|date_format:Y-m-d',
            'data_volta' => 'nullable|date_format:Y-m-d',
            'origem' => 'required|string|max:255',
            'destino' => 'required|string|max:255',
            'quarto_infantil' => 'nullable|string|max:50',
            'piscina' => 'nullable|string|max:50',
            'wifi' => 'nullable|string|max:50',
            'garagem' => 'nullable|string|max:50',
            'suite' => 'nullable|string|max:50',
        ]);

        Orcamento::create($validated);

        return response()->json(['message' => 'Orçamento criado com sucesso!'], 201);
    }

    public function index()
    {
        return Orcamento::all();
    }
}
