<?php

namespace App\Services\Post;

use App\Services\Post\PostServiceInterface;
use App\Repositories\Post\PostRepositoryInterface;

class postService implements PostServiceInterface
{
    private $post_repository;

    public function __construct(
        PostRepositoryInterface $post_repository
    ) {
        $this->post_repository = $post_repository;
    }

    public function getPosts()
    {
        return $this->post_repository->getPosts();
    }

    public function getPostByPostId($id)
    {
        return $this->post_repository->getPostByPostId($id);
    }

    public function getNewPosts()
    {
        return $this->post_repository->getNewPosts();
    }

    public function getFilterByRankingPosts()
    {
        return $this->post_repository->getFilterPostsByRanking();
    }

    public function getFilterPostByCategory()
    {
    }

    public function getFilterPostByUserId($id)
    {
    }

    public function getThreeNewPosts()
    {
        return $this->post_repository->getThreeNewPosts();
    }

    public function getThreePostsFilterRanking()
    {
        return $this->post_repository->getThreePostsFilterRanking();
    }

    public function getFilterPostByCreateAt()
    {
    }

    public function createPost($user_id, $title, $image, $category_id)
    {
    }

    public function editPost($post_id, $user_id, $title, $image, $category_id)
    {
    }

    public function deletePost($post_id)
    {
    }
}
