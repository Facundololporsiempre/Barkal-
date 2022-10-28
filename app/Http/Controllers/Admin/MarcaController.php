<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Marca;

use App\Http\Requests\MarcaRequest;
use Illuminate\Support\Facades\Storage;

class MarcaController extends Controller
{
    public function __construct()
    {
        $this->middleware("can:admin.marcas.index")->only("index");
        $this->middleware("can:admin.marcas.create")->only("create", "store");
        $this->middleware("can:admin.marcas.edit")->only("edit", "update");
        $this->middleware("can:admin.marcas.destroy")->only("destroy");
    }

    public function index()
    {
        $marcas = Marca::all();
        return view("admin.marcas.index", compact("marcas"));
    }

    public function create()
    {
        return view("admin.marcas.create");
    }

    public function store(MarcaRequest $request)
    {
        $marca = Marca::create($request->all());
        // if ($request->file("file")) {
        //     $url = Storage::put("public/posts", $request->file("file"));
        //     $marca->image()->create([
        //         "url" => $url
        //     ]);
        // }
        return redirect()->route("admin.marcas.index", $marca)->with("info", "La marca se agrego con exito");
    }

    public function edit(Marca $marca)
    {
        return view("admin.marcas.edit", compact("marca"));
    }

    public function update(MarcaRequest $request, Marca $marca)
    {
        // $request->validate([
        //     "name" => "required",
        //     "slug" => "required|unique:marcas,slug,$marca->id"
        // ]);
        $marca->update($request->all());
        // if ($request->file("file")) {
        //     $url = Storage::put("public/posts", $request->file("file"));
        //     if ($marca->image) {
        //         Storage::delete($marca->image->url);
        //         $marca->image->update([
        //             "url" => $url
        //         ]);
        //     }else{
        //         $marca->image()->create([
        //             "url" => $url
        //         ]);
        //     }
        // }
        return redirect()->route("admin.marcas.index", $marca)->with("info", "La marca se actualizo con exito");
    }

    public function destroy(Marca $marca)
    {
        $marca->delete();
        return redirect()->route("admin.marcas.index")->with("info", "La marca se elimino con exito");
    }
}
