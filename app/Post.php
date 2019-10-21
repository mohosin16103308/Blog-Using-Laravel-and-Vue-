<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
       
    
    
    
    /**
     * Get the category for the post.
     */
    public function category()
    {
        return $this->belongsTo('App\Category','id');

    }

       /**
     * Get the posts for the user.
     */
    public function user()
    {
        return $this->belongsTo('App\User','id');

    }
}
