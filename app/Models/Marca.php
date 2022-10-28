<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    // protected $fillable = ["name", "slug"];
    protected $guarded = ["id","created_at", "updated_at"];
    
    public function getRouteKeyName()
    {
        return "slug";
    }
    
    use HasFactory;
    // relacion de uno a muchos
    public function repuestos(){
        return $this->hasMany(Repuesto::class);
    }

    //Relacion Polimorfica con la tabla Imageable
    //morphOne pasa dos parametros 1) El modelo Image. 2)El nombre de la funcion de Tag
    public function image(){
        return $this->morphOne(Image::class, "imageable");
    }
}
