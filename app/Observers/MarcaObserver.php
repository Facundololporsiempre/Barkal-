<?php

namespace App\Observers;

use App\Models\Marca;
use Illuminate\Support\Facades\Storage;

class MarcaObserver
{
    // public function creating(Marca $marca)
    // {
    //     if (! \App::runningInConsole()) {
    //         $marca->user_id = auth()->user()->id;
    //     }
    // }

    public function deleting(Marca $marca)
    {
        if ($marca->image) {
            Storage::delete($marca->image->url);
        }
    }
}
