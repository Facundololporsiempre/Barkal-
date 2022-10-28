<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    // relacion uno a uno inversa
    public function venta()
    {
        return $this->belongsTo(Venta::class);
    }
}
