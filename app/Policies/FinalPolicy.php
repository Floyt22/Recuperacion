<?php

namespace App\Policies;

use App\User;
use App\Servicio;

use Illuminate\Auth\Access\HandlesAuthorization;

class FinalPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function vista(User $user)
    {
        $user = auth()->user();
        
        if($user->rol == 'cobrador'){
          return true;
        }
        else{
          return false;
        }
    }
}
