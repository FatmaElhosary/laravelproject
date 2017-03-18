<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
   protected $fillable = [
         'body','user_id' ,'article_id',//temporary
    ];
   // protected $table= "articles";
    
  //an article is owned by user 
   public function comments()
    {
        return $this->hasMany('App\Comment');
    }
 public function user()
 {
     return $this->belongsTo('App\user');
 }
    
}
