<?php

namespace App\Observers;

use App\Models\Reply;
use App\Notifications\TopicReplied;

class ReplyObserver
{
    public function created(Reply $reply)
    {
        $reply->topic->reply_count = $reply->topic->replies->count();
        $reply->topic->save();

        // 通知话题作者有新的评论
        $reply->topic->user->notify(new TopicReplied($reply));
    }

    public function creating(Reply $reply)
    {
        $reply->content = clean($reply->content, 'user_topic_body');
    }

    public function updating(Reply $reply)
    {
        //
    }

    public function deleted(Reply $reply)
    {
        $reply->topic->reply_count = $reply->topic->replies->count();
        $reply->topic->save();
    }
}