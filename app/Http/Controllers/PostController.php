<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\MyRequest;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {   
        //Auth::attempt(['email'=> 'mgmg@gmail.com','password'=> '12345']);
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function store(MyRequest $request)
    {
        $request->all();
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->created_at = now();
        $post->updated_at = now();
        $post->save();
        return redirect('/post');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', ['post' => $post]);
    }

    public function edit($id)
    {
        $post = POST::find($id);
        return view('posts.edit', compact('post'));
    }

    public function update(MyRequest $request, $id)
    {
        $request->all();
        $post = Post::find($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->updated_at = now();
        $post->save();
        return redirect('/post');
    }

    public function destroy($id)
    {

        Post::destroy($id);
        return redirect('/post');
    }

}
