<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;

    protected $fillable = ["name", "response","phone", "email", "query"];

    // relacion uno a uno
    // public function proveedor()
    // {
    //     return $this->hasOne(Proveedor::class);
    // }
}
