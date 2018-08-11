<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Review;
use App\User;

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
        $comment->is_reply_to = $request->get('comment_id');
        $comment->user()->associate($request->user());
        $review = Review::find($request->get('review_id'));
        $review->comments()->save($comment);
//        return var_dump($comment);

        return json_encode($comment);

//        return response()->json(['success' => 'Data is successfully added']);
    }

    public function fetch(Request $request)
    {
//        $review = Review::find($reviewid);
        $comments = Comment::where(['is_reply_to' => 0, 'commentable_id' => $request->get('review_id')])->get();
//        return $comments;
        $html = '';
        foreach ($comments as $comment) {
            $email = User::find($comment['user_id'])->email;
            $html .= '
            <div class="panel panel-default">
                <div class="panel-heading"> By <b>'.$email.'</b> on <i>'.$comment['created_at'].'</i></div>
                <div class="panel-body">'.$comment['content'].'</div>
                <div class="panel-footer" align="right">
                    <button type="button" class="btn btn-default reply" id="'.$comment['id'].'">Reply</button>
                </div>
            </div>';
        }
        $html .= $this->get_reply_comment($comment['id']);
        return $html;
    }

    protected function get_reply_comment($parent_id = 0, $marginLeft = 0)
    {
        $comments = Comment::where(['is_reply_to' => $parent_id])->get();
        if ($parent_id == 0) {
            $marginLeft = 0;
        } else {
            $marginLeft = $marginLeft + 48;
        }
        if ($comments != null) {
            $html = '';
            foreach ($comments as $comment) {
                $email = User::find($comment['user_id'])->email;
                $html .= '
                <div class="panel panel-default" style="margin-left:'.$marginLeft.'px">
                    <div class="panel-heading"> By <b>'.$email.'</b> on <i>'.$comment['created_at'].'</i></div>
                    <div class="panel-body">'.$comment['content'].'</div>
                    <div class="panel-footer" align="right">
                        <button type="button" class="btn btn-default reply" id="'.$comment['id'].'">Reply</button>
                    </div>
                </div>';
//                $html .= get_reply_comment($comment['id'], $marginLeft);
                $html .= $this->get_reply_comment($comment['id'], $marginLeft);
            }
        }
        return $html;
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
