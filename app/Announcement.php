<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    
    protected $fillable = [
        'author_id', 'category_id','title','content','url','slug','posted_at',
    ];
    


    /**
     * Return the post's author
     */
    public function author()
    {
        return $this->belongsTo(User::class,'author_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    
}
