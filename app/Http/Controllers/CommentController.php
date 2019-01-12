<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;

class CommentController extends Controller {


    /**
     * CommentController constructor.
     */
    public function __construct() {
        $this->middleware('auth');
    }

    public function store(Request $request) {
        $post = Post::findOrFail($request->post_id);

        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->user_id = \Auth::user()->id;
        $comment->post_id = $post->id;
        $comment->save();

        return redirect()->back();
    }
}
