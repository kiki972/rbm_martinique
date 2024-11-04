<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }
    
    public function create() {
        return view('articles.create');
    }
    
    public function store(Request $request) {
        Article::create($request->all());
        return redirect()->route('articles.index');
    }
    
}
