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

    // relacion uno aa uno
    public function compra()
    {
        return $this->hasOne(Compra::class);
    }
}
