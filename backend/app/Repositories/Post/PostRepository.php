<?php

namespace App\Repositories\Post;

use App\Models\Post;

class PostRepository implements PostRepositoryInterface
{
    public function getPosts()
    {
        return Post::all();
    }
    public function getPostByPostId($id)
    {
        return Post::find($id);
    }
    public function getPostsFilterRanking()
    {
    }
    public function getFilterPostByRanking()
    {
    }
    public function getFilterPostByCategory()
    {
    }
    public function getFilterPostByUserId($id)
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
