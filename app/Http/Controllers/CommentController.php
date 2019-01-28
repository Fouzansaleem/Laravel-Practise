<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Mail;
use App\Notifications\CommentNotify;
use App\Mail\CommentEmail;
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

        Notification::send(\Auth::user($post->creator), new CommentNotify($comment));

       // Mail::to($post->creator)
       //     ->send(new CommentEmail($comment));

        return redirect()->back();
    }
}
