<?php

namespace App\Http\Controllers;

use App\Models\Repuesto;
use App\Models\Categoria;
use App\Models\Compra;
use App\Models\Consulta;
use App\Models\Marca;
use App\Models\Modelo;
use Cart;
use Illuminate\Http\Request;

use App\Http\Requests\FormularioRequest;

class RepuestoController extends Controller
{
    // Vista principal
    public function index(){
        $repuestos = Repuesto::paginate(32);
        return view("repuestos.index", compact("repuestos"));
    }


    // Vista del repuesto seleccionado (show)
    public function show(Repuesto $repuesto){
        $marcaSimilares = Repuesto::where("marca_id", $repuesto->marca_id)->where("id", "!=", $repuesto->id)->latest("id")->take(3)->get();
        return view("repuestos.show", compact("repuesto", "marcaSimilares"));
    }


    // Session Repuestos
    public function repuestos(Request $request){
        $repuestos= Repuesto::all();
        $price = trim($request->get("price"));
        $repuestos = Repuesto::where("price", "LIKE", $price . "%")->get();
        $cantidad = $repuestos->count();
        return view("repuestos.repuesto", compact("repuestos", "cantidad", "price"));
    }


    // Session de Contactos
    public function consulta(){
        return view("repuestos.consulta");
    }
    public function store(Request $request){
        $request->validate([
            "name" => "required|string|between:5,25|regex:/^[\pL\s\-]+$/u",
            "phone" => "max:10",
            "email" => "required|between:5,40|email:rfc,dns",
            "query" => "required|min:10",
            // "response" => "",
        ]);
        $consulta = Consulta::create($request->all());
        return redirect()->route("repuestos.consultaRealizada", $consulta);
    }
    public function consultaRealizada(){
        return view("repuestos.consultaRealizada");
    }
    public function consultap(){
        $consultaR = Consulta::paginate(6); 
        return view("repuestos.consultaP", compact("consultaR"));
    }
    public function verConsulta(Consulta $consulta){
        return view("repuestos.verConsulta", compact("consulta"));
    }


    // Session de carrito de compras
    public function restrinsion(){
        return view("repuestos.restrinsion");
    }
    public function formulario(Repuesto $repuesto){
        $formularioPiso = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20);
        $formularioProv = array("Corrientes", "Chaco", "Santa Fe", "Formosa", "Entre R??os");
        $formularioCiudad = array("Capital | Corrientes", "Mercedes | Corrientes", "Bella Vista | Corrientes" , "Caa Cat?? | Corrientes", "Colonia Pellegrini | Corrientes", "Curuzu Cuatia | Corrientes", "Empedrado | Corrientes", "Goya | Corrientes", "Itati | Corrientes", "La Cruz | Corrientes", "Paso de la Patria | Corrientes", "San Antonio de Apipe | Corrientes", "Santo Tome | Corrientes", "Virasoro | Corrientes", "Esquina | Corrientes", "Ita Ibate | Corrientes", "Ituzaingo | Corrientes", "Mburucuya | Corrientes", "Monte Caseros | Corrientes", "Paso de los Libres | Corrientes", "Santa Ana | Corrientes", "Sauce | Corrientes", "Yapeyu | Corrientes", 
        "Avia Terai | Chaco", "Charata | Chaco", "El Sauzalito | Chaco", "Fuerte Esperanza | Chaco", "Gancedo | Chaco", "General Pinedo | Chaco", "General Vedia | Chaco", "Isla del Cerrito | Chaco", "Las Bre??as | Chaco", "Mision Nueva Pompeya | Chaco", "Puerto Tirol | Chaco", "Roque Saenz Pe??a | Chaco", "Villa Rio Bermejito | Chaco", "General San Martin | Chaco", "Hermoso Campo | Chaco", "Juan Jose Castelli | Chaco", "Machagai | Chaco", "Pampa del Indio | Chaco", "Resistencia | Chaco", "Villa Angela | Chaco", 
        "Alejandra | Santa Fe", "Armstrong | Santa Fe", "Arocena | Santa Fe", "Arroyo Seco | Santa Fe", "Arroyo Leyes | Santa Fe", "Avellaneda | Santa Fe", "Carcara??a | Santa Fe", "Cayasta | Santa Fe", "Ceres | Santa Fe", "Coronda | Santa Fe", "Elortondo | Santa Fe", "Firmat | Santa Fe", "Franck | Santa Fe", "Granadero Baigorria | Santa Fe", "Granadero Baigorria | Santa Fe", "Oliveros | Santa Fe", "Rafaela | Santa Fe", "Romang | Santa Fe", "Rufino | Santa Fe", "San Cristobal | Santa Fe", "San Jorge | Santa Fe", "San Justo | Santa Fe", "Capital | Santa Fe", "Santo Tome | Santa Fe", "Sauce Viejo | Santa Fe", "Timbues | Santa Fe", "Venado Tuerto | Santa Fe", "Villa Constitucion | Santa Fe", "Barrancas | Santa Fe", "Casilda | Santa Fe", "Ca??ada de Gomez | Santa Fe", "Chabas | Santa Fe", "Desvio Arijon | Santa Fe", "Esperanza | Santa Fe", "Florencia | Santa Fe", "Funes | Santa Fe", "Helvecia | Santa Fe", "Monje | Santa Fe", "Puerto Gaboto | Santa Fe", "Reconquista | Santa Fe", "Rosario | Santa Fe", "San Carlos | Santa Fe", "San Javier | Santa Fe", "San Jose del Rincon | Santa Fe", "San Lorenzo | Santa Fe", "Santa Rosa de Calchines | Santa Fe", "Sastre | Santa Fe", "Sunchales | Santa Fe", "Tostado | Santa Fe", "Villa Ca??as | Santa Fe", "Villa Ocampo | Santa Fe",
        "Clorinda | Formosa", "El Colorado | Formosa", "Capital | Formosa", "General Manuel Belgrano | Formosa", "Herradura | Formosa", "Ibarreta | Formosa", "Laguna Blanca | Formosa", "Mayor Villafa??e | Formosa", "Pirane | Formosa", "Ingeniero Juarez | Formosa", "Las Lomitas | Formosa", "Palo Santo | Formosa", "San Francisco de Laishi | Formosa", 
        "Basavilbaso | Entre R??os", "Brazo Largo | Entre R??os", "Colon | Entre R??os", "Concordia | Entre R??os", "Diamante | Entre R??os", "Federal | Entre R??os", "Gualeguay | Entre R??os", "Hasenkamp | Entre R??os", "Ibicuy | Entre R??os", "Larroque | Entre R??os", "Nogoya | Entre R??os", "Piedras Blancas | Entre R??os", "Puerto Yerua | Entre R??os", "Rosario del Tala | Entre R??os", "San Salvador | Entre R??os", "Urdinarrain | Entre R??os", "Viale | Entre R??os", "Villa Elisa | Entre R??os", "Villa Paranacito | Entre R??os", "Villa Urquiza | Entre R??os", "Chajari | Entre R??os", "Concepcion del Uruguay | Entre R??os", "Crespo | Entre R??os", "
        Federacion | Entre R??os", "General Ramirez | Entre R??os", "Gualeguaychu | Entre R??os", "Hernandarias | Entre R??os", "La Paz | Entre R??os", "Maria Grande | Entre R??os", "Parana | Entre R??os", "Pueblo Liebig | Entre R??os", "Puiggari | Entre R??os", "San Jose de Feliciano | Entre R??os", "Santa Elena | Entre R??os", "Valle Maria | Entre R??os", "Victoria | Entre R??os", "Villaguay | Entre R??os", "Villa San Jose | Entre R??os",);
        $validoM = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12); 
        $validoA = array(2022, 2023, 2024, 2025, 2026, 2027, 2028, 2029, 2030, 2031, 2032, 2033, 2034, 2035, 2036, 2037, 2038, 2039, 2040, 2041, 2042, 2043, 2044, 2045, 2046, 2047, 2048, 2049, 2050, 2051, 2052, 2053, 2054, 2055, 2056, 2057); 
        return view("repuestos.formulario", compact("formularioPiso", "formularioProv", "formularioCiudad", "validoM", "validoA", "repuesto"));
    }
    public function storer(FormularioRequest $request){
        $formulario = Compra::create($request->all());
        return redirect()->route("repuestos.compraRealizada", $formulario);
    }
    public function compraRealizada(){
        return view("repuestos.compraRealizada");
    }
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



    // Sesion de categorias
    public function categoria(Categoria $categoria, Request $request){
        $repuestos = Repuesto::where("categoria_id", $categoria->id)->get();
        $cantidad = $repuestos->count();
        // $price = trim($request->get("price"));
        // $repuestos = Repuesto::where("price", "LIKE", $price . "%")->get();
        return view("repuestos.categoria", compact("repuestos", "categoria", "cantidad"));
    }
    public function categoriaB(Request $request){
        $repuestos = Repuesto::query()->when(request('search'), function ($query){
            return $query->where("name", "LIKE", "%" . request('search') . "%");
        })->get();
        //->paginate(6); esto estava en el lugar del get
        $cantidad = $repuestos->count();
        $searchB = $_GET["search"];
        // $price = trim($request->get("price"));
        // $repuestos = Repuesto::where("price", "LIKE", $price . "%")->get();
        return view("repuestos.categoriaB", compact("repuestos", "cantidad", "searchB"));
    }
}
