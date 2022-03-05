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

    public function showNew()
    {
        $newPosts = $this->post_service->getNewPosts();

        return view(
            'new',
            [
                'newPosts' => $newPosts
            ]
        );
    }

    public function showRanking()
    {
        $filterByRankingPosts = $this->post_service->getFilterByRankingPosts();

        return view(
            'ranking',
            [
                'filterByRankingPosts' => $filterByRankingPosts
            ]
        );
    }

    public function showPost($id)
    {
        $post = $this->post_service->getPostByPostId($id);
        return view('post.show', ['post' => $post]);
    }
}
