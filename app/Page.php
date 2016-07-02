<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
     public function Comments()   {  
        return $this->hasMany('App\Comment', 'page_id', 'id'); 
          }
}
