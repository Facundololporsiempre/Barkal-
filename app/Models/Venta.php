<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    // relacion muchos a muchos
    public function repuestos()
    {
        return $this->belongsToMany(Repuesto::class);
    }

    // relacion uno a uno
    public function cliente()
    {
        return $this->hasOne(Cliente::class);
    }
}
