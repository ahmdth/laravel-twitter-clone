<?php

namespace App\Traits;

use App\Models\Like;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

trait Likable
{
    public function scopeWithLikes(Builder $query)
    {
        $query->leftJoinSub(
            'SELECT tweet_id, SUM(liked) likes, SUM(NOT liked) dislikes FROM likes GROUP BY tweet_id',
            'likes',
            'likes.tweet_id',
            '=',
            'tweets.id'
        );
    }

    public function like($user = null, $liked = true)
    {
        $this->likes()->updateOrCreate([
            'user_id' => $user ? $user->id : auth()->id(),
        ], [
            'liked' => $liked
        ]);
    }

    public function dislike($user = null)
    {
        $this->like($user, false);
    }

    public function isLikedBy(User $user, $like = true)
    {
        return (bool) $this->likes
            ->where('tweet_id', $this->id)
            ->where('liked', true)
            ->count();
    }

    public function isDislikedBy(User $user, $like)
    {
        return (bool) $this->isLikedBy($user, false);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
