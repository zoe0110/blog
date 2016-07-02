<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
     protected $fillable = ['nickname', 'email', 'website', 'content', 'page_id', 'article_id'];
     public function Pages()   {  
        return $this->belongsTo('App\Page'); 
          }
          public function Articles()   {  
        return $this->belongsTo('App\Article'); 
          }
}
