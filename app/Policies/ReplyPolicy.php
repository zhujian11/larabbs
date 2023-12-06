<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Reply;

class ReplyPolicy extends Policy
{
    public function destroy(User $user, Reply $reply)
    {
        // 回复的作者或回复话题的作者可以删
        return $user->isAuthOf($reply) || $user->isAuthOf($reply->topic);
    }
}
