<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ["url"];

    // Relacion Polimorfica lleva el mismo nombre de imageable por imageable_id de la tabla imageable.
    // Se relaciona polimorficamente con la palabra reservada ( morphTo )
    public function imageable(){
        return $this->morphTo();
    }
}
