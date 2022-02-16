<?php

namespace App\Services\Post;

interface PostServiceInterface
{
    public function getPosts();
    public function getPostByPostId($id);
    public function getPostsFilterRanking();
    public function getFilterPostByRanking();
    public function getFilterPostByCategory();
    public function getFilterPostByUserId($id);

    public function createPost($user_id, $title, $image, $category_id);

    public function editPost($post_id, $user_id, $title, $image, $category_id);

    public function deletePost($post_id);
}
