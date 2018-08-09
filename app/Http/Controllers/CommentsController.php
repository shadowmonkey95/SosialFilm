<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Review;

class CommentsController extends Controller
{
    public function store(Request $request)
    {
//        $comment = new Comment;
//        $comment->content = $request->get('content');
//        $comment->user()->associate($request->user());
//        $review = Review::find($request->get('review_id'));
//        $review->comments()->save($comment);
//
//        return back();
        $comment = new Comment;
        $comment->content = $request->get('comment_content');
        $comment->is_reply_to = 0;
        $review = Review::find($request->get('review_id'));
        $review->comments()->save($comment);
//        return var_dump($comment);

        return json_encode($comment);

//        return response()->json(['success' => 'Data is successfully added']);
    }

    public function fetch($reviewid)
    {
//        $review = Review::find($reviewid);
        $comment = Comment::where('is_reply_to', '=', 0)->where('commentable_id', '=', $reviewid)->get();
        return $comment;
    }

    public function replyStore(Request $request)
    {
        $reply = new Comment();
        $reply->content = $request->get('content');
        $reply->user()->associate($request->user());
        $reply->is_reply_to = $request->get('comment_id');
        $review = Review::find($request->get('review_id'));
        $review->comments()->save($reply);

        return back();
    }
}
