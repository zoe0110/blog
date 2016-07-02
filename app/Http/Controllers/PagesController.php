<?php

namespace App\Http\Controllers;
use App\Page;
use App\Article;
use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{



    public function show($id) {     
    	return view('pages.show')->withPage(Page::find($id));  
} 
}
