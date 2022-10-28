<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\ConsultasController;
use App\Http\Controllers\Admin\FormularioController;
use App\Http\Controllers\Admin\MarcaController;
use App\Http\Controllers\Admin\ModeloController;
use App\Http\Controllers\Admin\RepuestoController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get("", [HomeController::class, "index"])->middleware("can:admin.home")->name("admin.home");

Route::resource("users", UserController::class)->only("index", "edit", "update")->names("admin.users");

Route::resource("roles", RoleController::class)->names("admin.roles");

Route::resource("categorias", CategoriaController::class)->except("show")->names("admin.categorias");

Route::resource("marcas", MarcaController::class)->except("show")->names("admin.marcas");

Route::resource("modelos", ModeloController::class)->except("show")->names("admin.modelos");

Route::resource("repuestos", RepuestoController::class)->except("show")->names("admin.repuestos");

Route::resource("consultas", ConsultasController::class)->names("consulta.consultas");

Route::resource("formularios", FormularioController::class)->names("formulario.formularios");