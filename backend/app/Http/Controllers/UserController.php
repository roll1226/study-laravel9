<?php

namespace App\Http\Controllers;

use App\Services\User\UserServiceInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $user_service;

    public function __construct(
        UserServiceInterface $user_service
    ) {
        $this->user_service = $user_service;
    }

    //
    public function showUserList()
    {
        $users = $this->user_service->getUsers();

        return view('user.list', [
            'users' => $users
        ]);
    }
}
