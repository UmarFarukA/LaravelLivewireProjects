<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;

class UserPolicy
{
    public function modifyOrView(User $authUser)
    {
        return $authUser->role_id == 2;
    }
}
