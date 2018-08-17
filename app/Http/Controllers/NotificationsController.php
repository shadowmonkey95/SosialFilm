<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Review;
use App\Notification;
use App\User;
use App\Like;
use Auth;

class NotificationsController extends Controller
{
    public function fetch_noti()
    {
        if (Auth::check()) {
            $result = [];
            $count = Notification::where(['to_user_id' => Auth::user()->id])->count();
            $notifications = Notification::where(['to_user_id' => Auth::user()->id])->get();
            foreach ($notifications as $noti) {
                $tmp = [];


            }
        } else {
            $count = 0;
        }

        return $count;
    }
}
