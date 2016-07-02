<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests;

class ArticlesController extends Controller
{
	 public function index() {     
    	return view('articles.show')->withArticle(Article::all()); 
    }
    public function show($id) {     
    	return view('articles.show')->withArticle(Article::find($id)); } 
}
