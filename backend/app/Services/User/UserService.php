<?php

namespace App\Services\User;

use App\Repositories\User\UserRepositoryInterface;

class UserService implements UserServiceInterface
{
    private $user_repository;

    public function __construct(
        UserRepositoryInterface $user_repository
    ) {
        $this->user_repository  = $user_repository;
    }

    public function getUsers()
    {
        return $this->user_repository->getUsers();
    }
}
