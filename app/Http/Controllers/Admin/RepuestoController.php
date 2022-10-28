<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Repuesto;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Modelo;

use Illuminate\Support\Facades\Storage;

use App\Http\Requests\RepuestoRequest;

class RepuestoController extends Controller
{
    public function __construct()
    {
        $this->middleware("can:admin.repuestos.index")->only("index");
        $this->middleware("can:admin.repuestos.create")->only("create", "store");
        $this->middleware("can:admin.repuestos.edit")->only("edit", "update");
        $this->middleware("can:admin.repuestos.destroy")->only("destroy");
    }

    public function index()
    {
        return view("admin.repuestos.index");
    }

    public function create()
    {
        $categorias = Categoria::pluck("name", "id");
        $marcas = Marca::pluck("name", "id");
        $modelos = Modelo::pluck("name", "id");
        return view("admin.repuestos.create", compact("categorias", "marcas", "modelos"));
    }

    public function store(RepuestoRequest $request)
    {
        // return $request->file("file");
        // return Storage::put("posts", $request->file("file"));
        $repuesto = Repuesto::create($request->all());
        if ($request->file("file")) {
            $url = Storage::put("public/posts", $request->file("file"));
            $repuesto->image()->create([
                "url" => $url
            ]);
        }
        return redirect()->route("admin.repuestos.index", $repuesto)->with("info" , "El repuesto se agrego con exito");
    }

    public function edit(Repuesto $repuesto)
    {
        $this->authorize("author", $repuesto);
        $categorias = Categoria::pluck("name", "id");
        $marcas = Marca::pluck("name", "id");
        $modelos = Modelo::pluck("name", "id");
        return view("admin.repuestos.edit", compact("repuesto", "categorias", "marcas", "modelos"));
    }

    public function update(RepuestoRequest $request, Repuesto $repuesto)
    {
        $this->authorize("author", $repuesto);
        $repuesto->update($request->all());
        if ($request->file("file")) {
            $url = Storage::put("public/posts", $request->file("file"));
            if ($repuesto->image) {
                Storage::delete($repuesto->image->url);
                $repuesto->image->update([
                    "url" => $url
                ]);
            }else{
                $repuesto->image()->create([
                    "url" => $url
                ]);
            }
        }
        return redirect()->route("admin.repuestos.index", $repuesto)->with("info" , "El repuesto se actualizo con exito");
    }

    public function destroy(Repuesto $repuesto)
    {
        $this->authorize("author", $repuesto);
        $repuesto->delete();
        return redirect()->route("admin.repuestos.index", $repuesto)->with("info" , "El repuesto se elimino con exito");
    }
}
