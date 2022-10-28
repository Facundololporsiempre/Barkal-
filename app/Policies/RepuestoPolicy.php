<?php

namespace App\Policies;

use App\Models\Repuesto;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RepuestoPolicy
{
    use HandlesAuthorization;

    public function author(User $user, Repuesto $repuesto){
        if ($user->id == $repuesto->user_id) {
            return true;
        }else{
            return false;
        }
    }
}
