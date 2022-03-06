<?php

namespace App\Http\Controllers;

use App\Services\User\UserServiceInterface;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Pagination\Paginator;

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

    public function showMyPage(User $user, Request $request)
    {
        $userPostsPaginate = new Paginator(
            $user->posts,
            12,
            null,
            ['path' => $request->url()]
        );

        return view('user.index', ['user' => $user, 'posts' => $userPostsPaginate]);
    }
}
