<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abono_cxc extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function cuentasxcobrar()
    {
        return $this->belongsTo(Cuentasxcobrar::class);
    }
}
