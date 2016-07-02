<?php

namespace App\Http\Controllers\Admin;
use App\Page; 
use App\Article;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminHomeController extends Controller
{
     public function index()     {   
     	return view('AdminHome')->withPages(Page::all())->withArticles(Article::all()); 
     	    }
}
