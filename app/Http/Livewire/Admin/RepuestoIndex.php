<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Repuesto;

use Livewire\WithPagination;

class RepuestoIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $repuestos = Repuesto::where("user_id", auth()->user()->id)->where("name", "LIKE", "%" . $this->search . "%")->paginate(16);
        return view('livewire.admin.repuesto-index', compact("repuestos"));
    }
}
