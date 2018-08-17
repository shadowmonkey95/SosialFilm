<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\Notification;

class ReviewCommented implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $sent_email;
    public $type;
    public $message;
    public $count;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($sent_email, $type, $to_user_id)
    {
        $this->sent_email = $sent_email;
        $this->type = $type;
        $this->count = Notification::where(['to_user_id' => $to_user_id])->count();
        $this->message  = $sent_email.' '.$type.'ed'.' on your review'.'</br>'.'<hr>';
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return ['review-commented'];
    }
}
