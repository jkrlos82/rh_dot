<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    public function create()
    {
        return view('proveedores.create');
    }

    public function show($id)
    {
        return view('proveedores.show');
    }

    public function list()
    {
        return view('proveedores.list');
    }
}
