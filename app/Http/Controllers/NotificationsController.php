<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Review;
use App\Notification;
use App\User;
use App\Like;
use Auth;
use Carbon\Carbon;

class NotificationsController extends Controller
{
    public function fetch_noti_count()
    {
        if (Auth::check()) {
            $count = Notification::where(['to_user_id' => Auth::user()->id])->where(['read' => 0])->count();
        } else {
            $count = 0;
        }
        return $count;
    }
    public function fetch_noti_list()
    {
        if (Auth::check()) {
            $result = [];
//            $count = Notification::where(['to_user_id' => Auth::user()->id])->count();
            $notifications = Notification::where(['to_user_id' => Auth::user()->id])
                ->orderBy('created_at', 'DESC')->get();
            foreach ($notifications as $noti) {
                $tmp = [];
                $from_user_id = $noti['from_user_id'];
                $from_user_name = User::findOrFail($from_user_id)->name;
                $avatar = User::findOrFail($from_user_id)->avatar;
                $url = $noti['url'];
                $id = $noti['id'];
                $click = $noti['click'];
                $type = $noti['type'];
                $type_id = $noti['type_id'];
                $created_at = $noti['created_at'];
                $diff_time = $noti['created_at']->diffInSeconds(Carbon::now());
                $diff_type = 'seconds';
                if ($diff_time > 59) {
                    $diff_time = $noti['created_at']->diffInMinutes(Carbon::now());
                    $diff_type = 'minutes';
                    if ($diff_time > 59) {
                        $diff_time = $noti['created_at']->diffInHours(Carbon::now());
                        $diff_type = 'hours';
                        if ($diff_time > 23) {
                            $diff_time = $noti['created_at']->diffInDays(Carbon::now());
                            $diff_type = 'days';
                        }
                    }
                }
                array_push($tmp, $from_user_name, $type, $type_id, $diff_time, $diff_type, $avatar, $url, $id, $click);
                array_push($result, $tmp);
            }
        }
        return $result;
    }

    public function read()
    {
        if (Auth::check()) {
            Notification::where(['to_user_id' => Auth::user()->id])->where(['read' => 0])->update(['read' => 1]);
        }
    }

    public function click(Request $request)
    {
        $id = substr($request->id, 5);
        if (Auth::check()) {
//            Notification::where('id', $id)->update(['click' => 1]);
            $noti = Notification::findOrFail($id);
            if ($noti->click == 0) {
                $noti->update(['click' => 1]);
            }
            return json_encode($noti->url);
        }
    }
}
