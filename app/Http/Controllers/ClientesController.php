<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function create()
    {
        return view('clientes.create');
    }

    public function show($id)
    {
        return view('clientes.show');
    }

    public function list()
    {
        return view('clientes.list');
    }
}
