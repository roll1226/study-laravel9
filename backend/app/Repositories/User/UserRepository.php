<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\User\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function getUsers()
    {
        return User::paginate(12);
    }
}
