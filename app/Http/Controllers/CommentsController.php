<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Comment;
use App\Review;
use App\User;
use App\Notification;
use Auth;
use Carbon\Carbon;
use App\Events\ReviewCommented;

class CommentsController extends Controller
{
    public function store(Request $request)
    {
//        Event::fire(new StatusLiked('Someone'));
//        return '1';
        if (Auth::check()) {
//            Event::fire(new Events\StatusLiked('Someone'));
            $data['content'] = $request->get('content');
            $data['is_reply_to'] = $request->get('is_reply_to');
            $data['review_id'] = $request->get('review_id');
            $data['user_id'] = Auth::user()->id;
            $comment = Comment::create($data);

            $data_noti['from_user_id'] = User::findOrFail($data['user_id'])->id;
            $data_noti['to_user_id'] = Review::findOrFail($data['review_id'])->user_id;
            $data_noti['type'] = 'comment';
            $data_noti['read'] = 0;
            $data_noti['click'] = 0;
            $data_noti['type_id'] = $data['review_id'];
            if ($data_noti['from_user_id'] != $data_noti['to_user_id']) {
                $noti = Notification::create($data_noti);
                $sent_email = User::findOrFail($data['user_id'])->email;
                event(new ReviewCommented($sent_email, $noti->type, $noti->to_user_id));
            }

            return $comment;
        } else {
            return view('/login');
        }
    }

    public function fetch(Request $request)
    {
        $result = [];
        $comments = Comment::where(['is_reply_to' => 0, 'review_id' => $request->get('review_id')])
            ->orderBy('created_at', 'DESC')->get();
        foreach ($comments as $comment) {
            try {
                $tmp = [];
                $email = User::findOrFail($comment['user_id'])->email;
                $created_at = Carbon::parse($comment['created_at'])->format('H:m d M Y');
                $content = $comment['content'];
                $id = $comment['id'];
                $avatar = User::findOrFail($comment['user_id'])->avatar;
                array_push($tmp, $email, $created_at, $content, $id, $avatar);
                array_push($result, $tmp);
            } catch (ModelNotFoundException $e) {
                return $e->getMessage();
            }
        }

        return json_encode($result);
    }

    public function fetch2(Request $request)
    {
        $result = [];
        $replies = Comment::where(['is_reply_to' => $request->get('is_reply_to')])
            ->orderBy('created_at', 'DESC')->get();
        foreach ($replies as $reply) {
            try {
                $tmp = [];
                $email = User::findOrFail($reply['user_id'])->email;
                $created_at = Carbon::parse($reply['created_at'])->format('H:m d M Y');
                $content = $reply['content'];
                $id = $reply['id'];
                $avatar = User::findOrFail($reply['user_id'])->avatar;
                $is_reply_to = $reply['is_reply_to'];
                array_push($tmp, $email, $created_at, $content, $id, $avatar, $is_reply_to);
                array_push($result, $tmp);
            } catch (ModelNotFoundException $e) {
                return $e->getMessage();
            }
        }

        return $result;
    }
}
