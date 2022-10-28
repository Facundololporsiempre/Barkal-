<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Modelo;

class ModeloController extends Controller
{
    public function __construct()
    {
        $this->middleware("can:admin.modelos.index")->only("index");
        $this->middleware("can:admin.modelos.create")->only("create", "store");
        $this->middleware("can:admin.modelos.edit")->only("edit", "update");
        $this->middleware("can:admin.modelos.destroy")->only("destroy");
    }
    public function index()
    {
        $modelos = Modelo::all();
        return view("admin.modelos.index", compact("modelos"));
    }

    public function create()
    {
        // $colores = [
        //     "red" => "Color rojo", 
        //     "green" => "Color verde",
        //     "blue" => "Color azul"
        // ];
        // return view("admin.modelos.create", compact("colores"));
        return view("admin.modelos.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required",
            "slug" => "required|unique:modelos",
            // "color" => "required" 
        ]);
        $modelo = Modelo::create($request->all());
        return redirect()->route("admin.modelos.index", compact("modelo"))->with("info", "El modelo se agrego con exito");
    }

    public function edit(Modelo $modelo)
    {
        return view("admin.modelos.edit", compact("modelo"));
    }

    public function update(Request $request, Modelo $modelo)
    {
        $request->validate([
            "name" => "required",
            "slug" => "required|unique:modelos,slug,$modelo->id",
            // "color" => "required" 
        ]);
        $modelo->update($request->all());
        return redirect()->route("admin.modelos.index", $modelo)->with("info", "El modelo se actualizo con exito");
    }

    public function destroy(Modelo $modelo)
    {
        $modelo->delete();
        return redirect()->route("admin.modelos.index")->with("info", "El modelo se elimino con exito");
    }
}
