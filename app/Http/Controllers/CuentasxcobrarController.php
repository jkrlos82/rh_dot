<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CuentasxcobrarController extends Controller
{
    public function list()
    {
        return view('ventas.list');
    }
}
