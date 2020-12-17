<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::all()->each(function ($post) {
            Comment::create([
                'name' => 'test name',
                'comment' => 'test comment',
                'post_id' => $post->id,
            ]);
        });
    }
}
