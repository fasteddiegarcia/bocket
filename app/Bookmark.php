<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    //
    /**
     * Get the posts of the subbreddit.
     *
     */
    public function users() 
    {
        return $this->hasMany('App\User');
    }

    /**
     * Get the posts of the subbreddit.
     *
     */
    public function bookmarkTags() 
    {
        return $this->belongsToMany('App\Tag');
    }
}
