<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultadoProcessamento extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'notas_fiscais.*.cnpj' => 'required|string|size:14',
            'notas_fiscais.*.numero' => 'required|numeric',
            'notas_fiscais.*.data_processamento' => 'required|date_format:Y-m-d h:i:s',
        ]);


        foreach($request->get('notas_fiscais') as $nf) {
            \Log::info(
                sprintf(
                    'Nota fiscal %s com data atualizada',
                    $nf['numero']
                )
            );
        }

        return response()->json([
            'Notas fiscais atualizadas com sucesso',
        ], 200);
    }
}
