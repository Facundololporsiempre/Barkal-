<?php

namespace App\Observers;

use App\Models\Repuesto;
use Illuminate\Support\Facades\Storage;

class RepuestoObserver
{
    public function creating(Repuesto $repuesto)
    {
        if (! \App::runningInConsole()) {
            $repuesto->user_id = auth()->user()->id;
        }
    }

    public function deleting(Repuesto $repuesto)
    {
        if ($repuesto->image) {
            Storage::delete($repuesto->image->url);
        }
    }
}
