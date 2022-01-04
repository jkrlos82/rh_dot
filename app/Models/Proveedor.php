<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function FacturasCompra()
    {
        return $this->hasMany(Factura_compra::class);
    }
}
