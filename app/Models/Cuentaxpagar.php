<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuentaxpagar extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function facturaCompra()
    {
        return $this->belongsTo(Factura_compra::class);
    }

    public function abonos()
    {
        return $this->hasMany(Abono_cxp::class);
    }
}
