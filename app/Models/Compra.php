<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;
    
    protected $guarded = ["id", "created_at", "updated_at"];
    // relacion muchos a muchos
    public function repuestos()
    {
        return $this->belongsToMany(Repuesto::class);
    }
    
    // relacion uno aa uno
    public function proveedor()
    {
        return $this->hasOne(Proveedor::class);
    }
}
