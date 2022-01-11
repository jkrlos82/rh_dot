<?php

namespace App\Http\Services;

use App\Models\Compra;
use App\Models\Categoria;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ComprasService
{
    public function create(Request $request)
    {
        try {
            DB::transaction(function () use ($request) {
                $compra = Compra::create([
                    'nombre' => $request->input('nombre'),
                    'cantidad' => $request->input('cantidad'),
                    'valor_promedio' => $request->input('valor_promedio'),
                    'categoria_id' => $request->input('categoria_id'),
                    'factura_compra_id' => $request->input('factura_compra_id'),
                ]);
            });
            return json_encode(['success' => $request->input('nombre') . ' se ha registrado correctamente']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
