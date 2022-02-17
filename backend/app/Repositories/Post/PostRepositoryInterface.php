<?php

namespace App\Repositories\Post;

interface PostRepositoryInterface
{
    public function getPosts();
    public function getPostByPostId($id);
    public function getFilterPostsByRanking();
    public function getFilterPostsByCategory($id);
    public function getFilterPostsByCreateAt();
    public function getFilterPostsByUserId($id);
    public function getThreeNewPosts();
    public function getThreePostsFilterRanking();

    public function createPost($user_id, $title, $image, $category_id);

    public function editPost($post_id, $user_id, $title, $image, $category_id);

    public function deletePost($post_id);
}
