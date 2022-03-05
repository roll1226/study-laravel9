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

    public function showHome()
    {
        $threeNewPosts = $this->post_service->getThreeNewPosts();
        $threeFilterByRankingPosts = $this->post_service->getThreePostsFilterRanking();

        return view(
            'welcome',
            [
                'newPosts' => $threeNewPosts,
                'filterByRankingPosts' => $threeFilterByRankingPosts
            ]
        );
    }

    public function showPost($id)
    {
        $post = $this->post_service->getPostByPostId($id);
        return view('post.show', ['post' => $post]);
    }
}
