<?php

use App\Http\Controllers\Admin\FormularioController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\categoriaBController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RepuestoController;


// Sesion de la vista principal
Route::get('/', [RepuestoController::class, "index"])->name("repuestos.index");

// Sesion show
Route::get('repuesto/{repuesto}', [RepuestoController::class, "show"])->name("repuestos.show");


// Session Repuesto
Route::get('seccion/repuestos', [RepuestoController::class, "repuestos"])->name("repuestos.repuesto");

// Session formulario
Route::get('sesion/formulario/{repuesto}', [RepuestoController::class, "formulario"])->name("repuestos.formulario");
Route::post('storer', [RepuestoController::class, "storer"])->name("repuestos.storer");
Route::get('sesion/formulario/compraRealizada/{repuesto}', [RepuestoController::class, "compraRealizada"])->name("repuestos.compraRealizada");

// Session de compras
Route::get('repuesto/restrincion/{repuesto}', [RepuestoController::class, "restrinsion"])->name("repuestos.restrinsion");

// Crud de contacto
Route::get('seccion/contacto', [RepuestoController::class, "contacto"])->name("repuestos.contacto");
Route::get('consulta', [RepuestoController::class, "consulta"])->name("repuestos.consulta");
Route::post('store', [RepuestoController::class, "store"])->name("repuestos.store");
Route::get('consulta/consultaRealizada', [RepuestoController::class, "consultaRealizada"])->name("repuestos.consultaRealizada");
Route::get('consulta/consultaP', [RepuestoController::class, "consultaP"])->name("repuestos.consultaP");
Route::get('consulta/consultaP/{consulta}', [RepuestoController::class, "verConsulta"])->name("repuestos.verConsulta");


// Buscador de categorias
Route::get('categoria/{categoria}', [RepuestoController::class, "categoria"])->name("repuestos.categoria");
Route::get('categoriaB', [RepuestoController::class, "categoriaB"])->name("repuestos.categoriaB");
// Route::get('categoriaC/{categoria}', [RepuestoController::class, "categoriaC"])->name("repuestos.categoriaB");

// buscador por precio
// Route::get('categoria/{categoria}', [RepuestoController::class, "categoriaP"])->name("repuestos.categoria");

















// Route::get('seccion/carrito/{repuesto}', [RepuestoController::class, "carrito"])->name("repuestos.carrito");
// Route::get('storee', [CartController::class, "storee"])->name("repuestos.storee");
// Route::get('seccion/carrito', [CartController::class, "carrito"])->name("repuestos.carrito");
// Route::get('seccion/carrito', [CartController::class, "carrito"])->name("repuestos.carrito");
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
