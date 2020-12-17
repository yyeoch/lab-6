<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = array(
            array(
                'name' => 'first post',
                'title' => 'test title',
                'body' => 'some body',
                'short_body' => 'some short body',
                'image' => 'image url goes here',
                'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => DB::raw('CURRENT_TIMESTAMP')
            ),
            array(
                'name' => 'second post',
                'title' => 'test title',
                'body' => 'some body',
                'short_body' => 'some short body',
                'image' => 'image url goes here',
                'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => DB::raw('CURRENT_TIMESTAMP')
            ),
        );
        Post::insert($array);
    }
}
