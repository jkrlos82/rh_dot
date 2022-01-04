<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Http\Services\ProductosService;
use Illuminate\Support\Facades\Redirect;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producto = Producto::all();
        return View('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new ProductosService();
        $result = $producto->createProducto($request);
        return Redirect::to('producto')
            ->with('notice', 'El producto ha sido creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);
        return view('productos.show', compact('producto'));
    }


    /**           
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::find($id);
        return View('productos/edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *                                     
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Socio  $socio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre' => 'required',
        ]);
        $productos = new ProductosService();
        $productos->updateProducto($request, $producto);

        return Redirect::to('productos')
            ->with('notice', 'El producto ha sido actualizado correctamente.');
    }
}
