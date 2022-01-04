<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function FacturasVenta()
    {
        return $this->hasMany(Factura_venta::class);
    }
}
