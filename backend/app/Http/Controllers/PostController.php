<?php

namespace App\Http\Controllers;

use App\Services\Post\PostServiceInterface;

class PostController extends Controller
{
    private $post_service;

    public function __construct(PostServiceInterface $post_service)
    {
        $this->post_service = $post_service;
    }

    public function getPosts()
    {
        return $this->post_service->getPosts();
    }

    public function getPostByPostId($id)
    {
        dd($this->post_service->getPostByPostId($id));
    }
}
