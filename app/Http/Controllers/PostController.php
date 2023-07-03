<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index (Request $request) {
        // $posts = DB::table('posts')->get();
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    public function create() {
        return view('posts.create');
    }

    public function store(PostRequest $request) {
        $post = Post::create($request->validated());

        if ($post) {
            return redirect()->route('posts.index')->with('success', 'Thêm mới thành công');
        }
    }


    public function edit($id) {
        $post = Post::findOrFail(intval($id));

        return view('posts.edit', compact('post'));
    }

    public function update(PostRequest $request, $id) {
        dd($request->validated());

    }
}
