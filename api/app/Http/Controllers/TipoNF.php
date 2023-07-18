<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipoNF extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $tipo)
    {
        $request->validate([
            'cnpj' => 'required|string|size:14',
            'numero' => 'required|numeric',
            'itens' => 'required|array',
            'itens.*.produto' => 'required|string|min:3|max:255',
            'itens.*.quantidade' => 'required|numeric|min:0',
            'itens.*.valor' => 'required|numeric|min:0',
        ]);

        if ($tipo !== 'nfe') {
            \Log::error(sprintf("Tipo de nota '%s' indisponível no momento", $tipo));
            return response()->json([
                'error' => sprintf("Tipo de nota '%s' indisponível no momento", $tipo)
            ], 500);
        }

        \Log::info(
            sprintf(
                'Nota fiscal %s com %s itens processada',
                $request->get('numero'),
                count($request->get('itens'))
            )
        );

        return response()->json([
            sprintf(
                'Nota fiscal %s processada',
                $request->get('numero')
            )
        ], 201);
    }
}
