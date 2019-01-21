<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Post;


class PostController extends Controller {

    /**
     * PostController constructor.
     */
    public function __construct() {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $user = \Auth::user();
        $posts = $user->posts;
        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //

        $this->validate($request, array(
            'title' => 'required|max:255',
            'description' => 'required'
        ));

        $postvar = new Post();
        $postvar->title = $request->title;
        $postvar->description = $request->description;
        $postvar->user_id = \Auth::user()->id;
        $postvar->save();

        return redirect()
            ->route('post.index')
            ->with('success', 'Post Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //

        $posts = Post::find($id);
        return view('posts.show', ['post' => $posts]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //

        $post = Post::find($id);
        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //

        Validator::make($request->all(), [
            'title' => 'required|unique:posts|max:255',
            'description' => 'required',
        ])
                 ->validate();

        $post = Post::find($id);
        $post->update($request->all());
        return redirect()
            ->route('post.index')
            ->with('success', 'Post Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
        Post::find($id)
            ->delete();
        return redirect()
            ->route('post.index')
            ->with('success', 'Post Deleted successfully');
    }


}
