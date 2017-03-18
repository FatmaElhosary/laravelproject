<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $fillable = [
        'body', 'user_id', 'article_id','post_id',
    ];
     public function post()
    {
        return $this->belongsTo('App\Post');
    }
     public function user()
 {
     return $this->belongsTo('App\user');
 }
}
