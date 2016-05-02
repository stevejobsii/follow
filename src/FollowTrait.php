<?php
namespace Smartisan\Follow;

trait FollowTrait
{
    public function follow($user)
    {
        //
    }

    public function unfollow($user)
    {
        //
    }

    public function block($user)
    {
        //
    }

    public function unblock($user)
    {
        //
    }

    public function isFollowing($user)
    {
        //
    }

    public function isFollowedBy($user)
    {
        //
    }

    /**
     * Followers relationship.
     *
     * @return mixed
     */
    public function followers()
    {
        $model = config('follow.user_model');

        return $this->belongsToMany($model, 'followers', 'follow_id', 'user_id');
    }

    /**
     * Followings relationship.
     *
     * @return mixed
     */
    public function followings()
    {
        $model = config('follow.user_model');

        return $this->belongsToMany($model, 'followers', 'user_id', 'follow_id');
    }
}