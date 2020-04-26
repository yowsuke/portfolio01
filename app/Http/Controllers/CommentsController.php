<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Request $request, Post $post) {
        $this->validate($request,[
            'content' => 'required'
        ]);
        $comment = new Comment(['content' => $request->content]);
        $post->comments()->save($comment);
        return redirect()->action('PostController@show',$post);
    }

    public function destroy(Post $post, Comment $comment) {
        $comment->delete();
        return redirect()->back();
    }
}
