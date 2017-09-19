<?php


namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    

public function index()
{
	$post = Post::all()->paginate(10);
	return view('blog.posts')->withPost('post');
}


    public function getSingle($slug){

    	$post = Post::where('slug', '=', $slug)->first();

    	return view('blog.single')->withPost($post);
    }
}
