<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function create()
    {
    	$form = Post::form();

    	return response()
    		->json([
    			'form' =>$form
    			]);
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'video' => 'required | max:255',
    		'images' => 'required | array | min:1',
    		'iamges.*.image' => 'required | max:255',
    		'contents' => 'required | array | min:1',
    		'contents.*.locale' => 'required | max:3000',
    		'contents.*.content' => 'required | max:3000'
    		]);

    	$images = [];
    	foreach ($request->images as $image) {
    		$images[] = new PostImage($image);

    		if ($image->hasFile('image') && !$image->file('image')->isValid()) {
    		return abort(404, 'Image not uploaded');
    		}
    		$filename = $this->getFileName($image);
    		$image->move(base_path('public/images'), $filename);
    	}

    	$contents = [];
    	foreach ($request->contents as $content) {
    		$contents[] = new PostContent($content);
    	}

    	
    	$post = new Post($request->all());

    	// $recipe->image = $filename;

    	// $request->user()
    	// 	->recipes()->save($recipe);

    	$post->images()
    		->saveMany($images);

    	$post->contents()
    		->saveMany($contents);

    	return response()
    		->json([
    			'saved' => true,
    			'id' => $post->id,
    			'message' => 'You have successfully created recipe!'
    			]);
    }

    protected function getFileName($file)
    	{
    		return str_random(32). '.' . $file->extension();
    	}
}
