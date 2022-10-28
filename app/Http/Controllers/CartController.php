<?php

namespace App\Http\Controllers;

use App\Models\Repuesto;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    // public function carrito(){
    //     return view("repuestos.carrito");
    // }
    // // public function carrito(Repuesto $repuesto){
    // //     return view("repuestos.carrito", compact("repuesto"));
    // // }
    // public function storee(Request $request){
    //     $carrito = Repuesto::create($request->all());
    //     // return view("repuestos.carrito", compact("carrito"));
    //     return redirect()->route("repuestos.carrito", $carrito);
    // }
}
