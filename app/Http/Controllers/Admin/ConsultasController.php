<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Consulta;
use Illuminate\Http\Request;

class ConsultasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware("can:consulta.consultas.index")->only("index");
        $this->middleware("can:consulta.consultas.edit")->only("edit", "update");
    }

    public function index()
    {
        $consultas = Consulta::all();
        return view("consulta.consultas.index", compact("consultas"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("consulta.consultas.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     "name" => "required",
        //     "phone" => "",
        //     "email" => "required|unique:consultas",
        //     "query" => "required",
        // ]);
        // $consulta = Consulta::create($request->all());
        // return redirect()->route("consulta.consultas.index", $consulta);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Consulta $consulta)
    {
        // $consultas = Consulta::all(); 
        return view("consulta.consultas.show", compact("consulta"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Consulta $consulta)
    {
        return view("consulta.consultas.edit", compact("consulta"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consulta $consulta)
    {
        $request->validate([
            "name" => "required|string|between:5,25",
            "phone" => "max:10",
            "email" => "required|between:5,40|email:rfc,dns",
            "query" => "required|min:10",
            "response" => "required|min:10",
        ]);
        $consulta->update($request->all());
        // return redirect()->route("consulta.consultas.index", $consulta)->with("info", "Su respuesta a sido enviado correctamente");
        return redirect()->route("consulta.consultas.index", $consulta)->with("info", "Su respuesta a sido enviado correctamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consulta $consulta)
    {
        $consulta->delete();
        return redirect()->route("consulta.consultas.index")->with("info", "La consulta a sido eliminada correctamente");
    }
}
