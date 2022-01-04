<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function categorias()
    {
        return $this->hasMany(Categoria::class);
    }

    public function facturaVenta()
    {
        return $this->belongsTo(Factura_venta::class);
    }
}
