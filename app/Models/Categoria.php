<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    // declarar la asignacion masiva
    protected $fillable = ["name", "slug"];

    public function getRouteKeyName()
    {
        return "slug";
    }
    
    // relacion de uno a muchos
    public function repuestos(){
        return $this->hasMany(Repuesto::class);
    }
}
