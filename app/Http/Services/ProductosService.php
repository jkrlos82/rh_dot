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
                    'nombre' => $request->input('producto'),
                ]);

                $categoria = $request->input('nombre_categoria');
                $cantidad = $request->input('cantidad');
                $valor = $request->input('valor_promedio');

                for ($i = 0; $i < 5; $i++) {

                    if ($categoria[$i] != null && $cantidad[$i] != null && $valor[$i] != null) {
                        Categoria::create([
                            'producto_id' => $producto->id,
                            'nombre_categoria' => $categoria[$i],
                            'cantidad' =>  $cantidad[$i],
                            'valor_promedio' => $valor[$i],
                        ]);
                    }
                }
            });
            return json_encode(['success' => $request->input('nombre') . ' se ha registrado correctamente']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function updateProducto(Request $request, $id)
    {
        try {

            DB::transaction(function () use ($request, $id) {
                $categoria = Categoria::find($request->input('id_categoria'));
                $producto = Producto::find($id);

                $producto->nombre = $request->input('nombre');
                $producto->save();

                $categoria->nombre_categoria = $request->input('nombre_categoria');
                $categoria->cantidad = $request->input('cantidad');
                $categoria->valor_promedio = $request->input('valor_promedio');

                $categoria->save();
            });
            return json_encode(['success' => $request->input('producto') . ' se ha actualizado correctamente']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
