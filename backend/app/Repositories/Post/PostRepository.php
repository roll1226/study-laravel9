<?php

namespace App\Repositories\Post;

use App\Models\Nice;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

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

    public function getFilterPostsByRanking()
    {
        return Post::leftJoin('nices', 'posts.id', 'nices.post_id')
            ->select(
                'posts.id',
                'posts.user_id',
                'posts.title',
                'posts.created_at',
                'posts.updated_at',
                'posts.category_id',
                DB::raw('count(nices.post_id) as nice_count')
            )
            ->groupBy('posts.id')
            ->groupBy('posts.user_id')
            ->groupBy('posts.title')
            ->groupBy('posts.created_at')
            ->groupBy('posts.updated_at')
            ->groupBy('posts.category_id')
            ->orderBy('nice_count', 'desc')
            ->get();
    }

    public function getFilterPostsByCategory($id)
    {
        return Post::where('category_id', $id)->get();
    }

    public function getFilterPostsByUserId($id)
    {
        return Post::where('user_id', $id)->get();
    }

    public function getThreeNewPosts()
    {
        return Post::orderBy('created_at', 'desc')->take(3)->get();
    }

    public function getThreePostsFilterRanking()
    {
        return Post::leftJoin('nices', 'posts.id', 'nices.post_id')
            ->select(
                'posts.id',
                'posts.user_id',
                'posts.title',
                'posts.created_at',
                'posts.updated_at',
                'posts.category_id',
                DB::raw('count(nices.post_id) as nice_count')
            )
            ->groupBy('posts.id')
            ->groupBy('posts.user_id')
            ->groupBy('posts.title')
            ->groupBy('posts.created_at')
            ->groupBy('posts.updated_at')
            ->groupBy('posts.category_id')
            ->orderBy('nice_count', 'desc')
            ->take(3)
            ->get();
    }

    public function  getFilterPostsByCreateAt()
    {
        return Post::orderBy('created_at', 'desc')->get();
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
