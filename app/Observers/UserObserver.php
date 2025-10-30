<?php

namespace App\Observers;

use App\Models\Role;
use App\Models\User;

class UserObserver
{
    public function created(User $user): void
    {
        $roleUserId = Role::where('title', '=', Role::ROLE_USER)->first()->id;
        $user->roles()->sync($roleUserId);

        $user->profile()->create();
    }
}
