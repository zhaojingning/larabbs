<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Rely;

class RelyPolicy extends Policy
{
    public function update(User $user, Rely $rely)
    {
        // return $rely->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Rely $rely)
    {
        return $user->isAuthorOf($reply) || $user->isAuthorOf($reply->topic);
    }
}
