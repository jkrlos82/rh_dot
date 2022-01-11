<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GastosController extends Controller
{
    public function create()
    {
        return view('gastos.create');
    }

    public function list()
    {
        return view('gastos.list');
    }
}
