<?php

namespace App\Observers;

use App\Models\Rely;
use App\Notifications\TopicReplied;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class RelyObserver
{
    public function created(Reply $reply)
    {
        $reply->topic->reply_count = $reply->topic->replies->count();
        $reply->topic->save();

        // 通知话题作者有新的评论
        $reply->topic->user->notify(new TopicReplied($reply));
    }

    public function creating(Rely $rely)
    {
        //
    }

    public function updating(Rely $rely)
    {
        //
    }
}