<?php

namespace App\Services\Post;

interface PostServiceInterface
{
    public function getPosts();
    public function getPostByPostId($id);
    public function getNewPosts();
    public function getFilterByRankingPosts();
    public function getFilterPostByCategory();
    public function getFilterPostByUserId($id);
    public function getThreeNewPosts();
    public function getThreePostsFilterRanking();
    public function getFilterPostByCreateAt();

    public function createPost($user_id, $title, $image, $category_id);

    public function editPost($post_id, $user_id, $title, $image, $category_id);

    public function deletePost($post_id);
}
