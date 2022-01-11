<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compra;

class ComprasController extends Controller
{
    public function create()
    {
        return view('compras.create');
    }

    public function index(Request $request)
    {
        if ($request->input('cancelado') == 'true') {
            return view('compras.index');
        } else {
            return view('compras.list');
        }
    }
}
