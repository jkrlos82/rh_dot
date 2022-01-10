<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VentasController extends Controller
{
    public function create()
    {
        return view('ventas.create');
    }

    public function index(Request $request)
    {

        if ($request->input('cancelado') == 'true') {
            return view('ventas.index');
        } else {
            return view('ventas.list');
        }
    }
}
