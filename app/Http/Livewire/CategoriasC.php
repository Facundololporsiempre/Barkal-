<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Modelo;
use App\Models\Repuesto;
use Livewire\Component;

class CategoriasC extends Component
{
    // public $sorting;
    // pu4)
    // public function mount(){
    //     $this->sorting = "default";
    //     // $this->pagesize= 12;
    // }

    // public $repuestos = [], $priceInput;
    // public $repuestos, $priceInput;

    // protected $squeryString = [
    //     'priceInput' =>['except' => '', 'as' => 'price'],
    // ];
    // public $search = "a"; 
    // public $priceSort;
    // public function mount(){
    //     $this->priceSort = "default";
    // }
    public function render()
    {
        // if ($this->priceSort=="") {
        //     $categorias = Repuesto::orderBy("created_at","DESC");
        // }
        // else if ($this->priceSort=="priceL") {
        //     $categorias = Repuesto::orderBy("price","DESC");
        // }
        // else if ($this->priceSort=="priceG") {
        //     $categorias = Repuesto::orderBy("price","ASC");
        // }
        // else {
        //     $categorias = Repuesto::orderBy("created_at","DESC");
        // }



        // $this->repuestos = Repuesto::Where("categoria_id",$this->categoria->id)->when($this->priceInput, function($q) {

        //     $q->when($this->priceInput == 'priceL', function($q2){
        //         $q2->orderBy("price","DESC");
        //     })
        //     ->when($this->priceInput == 'priceG', function($q2){
        //         $q2->orderBy("price","ASC");
        //     });
        // });
        $categorias = Categoria::all();
        // $categorias = Repuesto::with("categoria_id")->paginate(6);
        // $categoiasP = Repuesto::where();
        // $repuestosB = Repuesto::all(); 
        return view('livewire.categorias-c', compact("categorias"));
    }
}
