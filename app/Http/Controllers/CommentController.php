<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;

class CommentController extends Controller
{

 	
    
       public function store(Request $request)
    {
        $comment = new Comment();
        $comment->comment = $request -> comment;
        $comment-> user_id =\Auth::user()->id;
        $comment-> post_id =$request->post_id;
        $comment->save();

         return redirect ()->back();
    }
}
