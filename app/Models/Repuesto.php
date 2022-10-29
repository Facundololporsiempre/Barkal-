<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repuesto extends Model
{
    use HasFactory;

    protected $guarded = ["id","created_at", "updated_at"];

    public function getRouteKeyName()
    {
        return "slug";
    }

    // relacion de uno a muchos inversa
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
    public function marca(){
        return $this->belongsTo(Marca::class);
    }
    public function modelo(){
        return $this->belongsTo(Modelo::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    

    // relacion mucho a mucho
    public function proveedor(){
        return $this->belongsToMany(Proveedor::class);
    }
    public function compra(){
        return $this->belongsToMany(Compra::class);
    }
    public function venta(){
        return $this->belongsToMany(Venta::class);
    }

    //Relacion Polimorfica con la tabla Imageable
    //morphOne pasa dos parametros 1) El modelo Image. 2)El nombre de la funcion de Tag
    public function image(){
        return $this->morphOne(Image::class, "imageable");
    }
}
