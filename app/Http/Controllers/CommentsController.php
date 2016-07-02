<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect, Input; 
use App\Comment; 
use App\Http\Requests;

class CommentsController extends Controller
{
   public function store(Request $request) { 
   	 
   $input = $request->all();    
   	if (Comment::create($input)) {   
   	      return Redirect::back();     
   	  } else
   	   {      
   	      return Redirect::back()->withInput()->withErrors('Comment publish fail!');   
   	        } 
   	    } 
}
