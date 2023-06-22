<?php

namespace App\Http\Services;

use App\Models\User;

class UserServices
{
    public function __construct(
        private User $user
    ){}

    public function all()
    {
        return $this->user->all();
    }


}
