<?php

use Illuminate\Database\Seeder;

use Faker\Factory;
use App\Post;
use App\PostImage;
use App\PostContent;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $lang = ['en','hk','cn']

        Post::truncate();
        PostContent::truncate();
        // PostImage::truncate();

        foreach (range(1,10) as $i) {
        	$post = Post::create([
        		'video' => $faker->sentence,
        	]);

        	foreach (range(1, mt_rand(3,12)) as $j) {
        		PostContent::create([
        			'post_id' => $post->id,
        			'locale' => $lang[mt_rand(0,count($lang)-1)],
        			'content' => $faker->sentence
        		]);
        	}

     
        }

    }
}

