<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    /**
     * Get the posts of the subbreddit.
     *
     */
    public function users() 
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the posts of the subbreddit.
     *
     */
    public function tagBookmarks() 
    {
        return $this->belongsToMany('App\Bookmark');
    }
}
