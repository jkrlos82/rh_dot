<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CuentasxpagarController extends Controller
{
    public function list()
    {
        return view('compras.list');
    }
}
