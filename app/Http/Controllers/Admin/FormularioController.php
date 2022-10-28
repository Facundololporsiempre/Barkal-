<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormularioRequest;
use App\Models\Compra;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware("can:formulario.formularios.index")->only("index");
        $this->middleware("can:formulario.formularios.edit")->only("edit");
    }
    public function index()
    {
        $formularios = Compra::all();
        return view("formulario.formularios.index", compact("formularios"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("formulario.formularios.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Compra $formulario)
    {
        return view("formulario.formularios.show", compact("formulario"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Compra $formulario)
    {
        $formularioPiso = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20);
        // $formularioProv = array("Corrientes", "Buenos Aires");
        $formularioProv = array("Corrientes", "Chaco", "Santa Fe", "Formosa", "Entre Ríos");
        // $formularioCiudad = array("Capital | Corrientes", "Mercedes | Corrientes");
        $formularioCiudad = array("Capital | Corrientes", "Mercedes | Corrientes", "Bella Vista | Corrientes" , "Caa Catí | Corrientes", "Colonia Pellegrini | Corrientes", "Curuzu Cuatia | Corrientes", "Empedrado | Corrientes", "Goya | Corrientes", "Itati | Corrientes", "La Cruz | Corrientes", "Paso de la Patria | Corrientes", "San Antonio de Apipe | Corrientes", "Santo Tome | Corrientes", "Virasoro | Corrientes", "Esquina | Corrientes", "Ita Ibate | Corrientes", "Ituzaingo | Corrientes", "Mburucuya | Corrientes", "Monte Caseros | Corrientes", "Paso de los Libres | Corrientes", "Santa Ana | Corrientes", "Sauce | Corrientes", "Yapeyu | Corrientes", 
        "Avia Terai | Chaco", "Charata | Chaco", "El Sauzalito | Chaco", "Fuerte Esperanza | Chaco", "Gancedo | Chaco", "General Pinedo | Chaco", "General Vedia | Chaco", "Isla del Cerrito | Chaco", "Las Breñas | Chaco", "Mision Nueva Pompeya | Chaco", "Puerto Tirol | Chaco", "Roque Saenz Peña | Chaco", "Villa Rio Bermejito | Chaco", "General San Martin | Chaco", "Hermoso Campo | Chaco", "Juan Jose Castelli | Chaco", "Machagai | Chaco", "Pampa del Indio | Chaco", "Resistencia | Chaco", "Villa Angela | Chaco", 
        "Alejandra | Santa Fe", "Armstrong | Santa Fe", "Arocena | Santa Fe", "Arroyo Seco | Santa Fe", "Arroyo Leyes | Santa Fe", "Avellaneda | Santa Fe", "Carcaraña | Santa Fe", "Cayasta | Santa Fe", "Ceres | Santa Fe", "Coronda | Santa Fe", "Elortondo | Santa Fe", "Firmat | Santa Fe", "Franck | Santa Fe", "Granadero Baigorria | Santa Fe", "Granadero Baigorria | Santa Fe", "Oliveros | Santa Fe", "Rafaela | Santa Fe", "Romang | Santa Fe", "Rufino | Santa Fe", "San Cristobal | Santa Fe", "San Jorge | Santa Fe", "San Justo | Santa Fe", "Capital | Santa Fe", "Santo Tome | Santa Fe", "Sauce Viejo | Santa Fe", "Timbues | Santa Fe", "Venado Tuerto | Santa Fe", "Villa Constitucion | Santa Fe", "Barrancas | Santa Fe", "Casilda | Santa Fe", "Cañada de Gomez | Santa Fe", "Chabas | Santa Fe", "Desvio Arijon | Santa Fe", "Esperanza | Santa Fe", "Florencia | Santa Fe", "Funes | Santa Fe", "Helvecia | Santa Fe", "Monje | Santa Fe", "Puerto Gaboto | Santa Fe", "Reconquista | Santa Fe", "Rosario | Santa Fe", "San Carlos | Santa Fe", "San Javier | Santa Fe", "San Jose del Rincon | Santa Fe", "San Lorenzo | Santa Fe", "Santa Rosa de Calchines | Santa Fe", "Sastre | Santa Fe", "Sunchales | Santa Fe", "Tostado | Santa Fe", "Villa Cañas | Santa Fe", "Villa Ocampo | Santa Fe",
        "Clorinda | Formosa", "El Colorado | Formosa", "Capital | Formosa", "General Manuel Belgrano | Formosa", "Herradura | Formosa", "Ibarreta | Formosa", "Laguna Blanca | Formosa", "Mayor Villafañe | Formosa", "Pirane | Formosa", "Ingeniero Juarez | Formosa", "Las Lomitas | Formosa", "Palo Santo | Formosa", "San Francisco de Laishi | Formosa", 
        "Basavilbaso | Entre Ríos", "Brazo Largo | Entre Ríos", "Colon | Entre Ríos", "Concordia | Entre Ríos", "Diamante | Entre Ríos", "Federal | Entre Ríos", "Gualeguay | Entre Ríos", "Hasenkamp | Entre Ríos", "Ibicuy | Entre Ríos", "Larroque | Entre Ríos", "Nogoya | Entre Ríos", "Piedras Blancas | Entre Ríos", "Puerto Yerua | Entre Ríos", "Rosario del Tala | Entre Ríos", "San Salvador | Entre Ríos", "Urdinarrain | Entre Ríos", "Viale | Entre Ríos", "Villa Elisa | Entre Ríos", "Villa Paranacito | Entre Ríos", "Villa Urquiza | Entre Ríos", "Chajari | Entre Ríos", "Concepcion del Uruguay | Entre Ríos", "Crespo | Entre Ríos", "
        Federacion | Entre Ríos", "General Ramirez | Entre Ríos", "Gualeguaychu | Entre Ríos", "Hernandarias | Entre Ríos", "La Paz | Entre Ríos", "Maria Grande | Entre Ríos", "Parana | Entre Ríos", "Pueblo Liebig | Entre Ríos", "Puiggari | Entre Ríos", "San Jose de Feliciano | Entre Ríos", "Santa Elena | Entre Ríos", "Valle Maria | Entre Ríos", "Victoria | Entre Ríos", "Villaguay | Entre Ríos", "Villa San Jose | Entre Ríos",);
        $validoM = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12); 
        $validoA = array(2022, 2023, 2024, 2025, 2026, 2027, 2028, 2029, 2030, 2031, 2032, 2033, 2034, 2035, 2036, 2037, 2038, 2039, 2040, 2041, 2042, 2043, 2044, 2045, 2046, 2047, 2048, 2049, 2050, 2051, 2052, 2053, 2054, 2055, 2056, 2057); 
        return view("formulario.formularios.edit", compact("formulario", "formularioPiso", "formularioProv", "formularioCiudad", "validoM", "validoA"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FormularioRequest $request, Compra $formulario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compra $formulario)
    {
        //
    }
}
