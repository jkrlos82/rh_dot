<?php

namespace App\Http\Services;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductosService
{

    public function createProducto(Request $request)
    {
        try {
            DB::transaction(function () use ($request) {
                $producto = Producto::create([
                    'nombre' => $request->input('nombre'),

                ]);
                Categoria::create([
                    'producto_id' => $producto->id,
                    'nombre' => $request->input('nombre'),
                    'cantidad' => $request->input('cantidad'),
                    'valor_promedio' => $request->input('valor_promedio'),
                ]);
            });
            return json_encode(['success' => $request->input('nombre') . ' se ha registrado correctamente']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function updateProducto(Request $request, Producto $producto)
    {
        try {
            DB::transaction(function () use ($request, $producto) {
                $producto->update([
                    'nombre' => $request->input('nombre'),

                ]);
                $producto->categoria->update([
                    'nombre' => $request->input('nombre'),
                    'cantidad' => $request->input('cantidad'),
                    'valor_promedio' => $request->input('valor_promedio'),
                ]);
            });
            return json_encode(['success' => $request->input('nombre') . ' se ha actualizado correctamente']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
