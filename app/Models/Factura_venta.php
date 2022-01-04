<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura_venta extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function Ventas()
    {
        return $this->hasMany(Venta::class);
    }

    public function Cuentaxcobrar()
    {
        return $this->hasOne(Cuentasxcobrar::class);
    }

    public function Cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
