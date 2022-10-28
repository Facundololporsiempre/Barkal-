<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    // relacion muchos a muchos
    public function repuestos()
    {
        return $this->belongsToMany(Repuesto::class);
    }

    // relacion uno a uno inversa
    // public function compra()
    // {
    //     return $this->belongsTo(Compra::class);
    // }

    // relacion uno a uno inversa
    // public function consulta()
    // {
    //     return $this->belongsTo(Consulta::class);
    // }
}
