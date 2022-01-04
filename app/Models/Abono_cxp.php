<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abono_cxp extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function cuentaxpagar()
    {
        return $this->belongsTo(Cuentaxpagar::class);
    }
}
