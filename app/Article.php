<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
         'title', 'body','published','user_id'//temporary
    ];
   // protected $table= "articles";
    
  //an article is owned by user   
 public function user()
 {
     return $this->belongsTo('App\user');
 }
    
}
  