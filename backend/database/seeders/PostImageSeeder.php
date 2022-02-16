<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $posts = Post::all()->pluck('id')->toArray();
        $post_images = [];

        for ($i = 0; $i < count($posts); $i++) {
            array_push($post_images, [
                "post_id" => $posts[$i],
                "image_name" => "https://unsplash.it/680/450?random",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }

        DB::table('post_images')->insert($post_images);
    }
}
