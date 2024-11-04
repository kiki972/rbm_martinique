<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function index() {
        $newsletters = Newsletter::all();
        return view('articles.index', compact('articles'));
    }
    
    public function create() {
        return view('newsletter.create');
    }
    
    public function store(Request $request) {
        Newsletter::create($request->all());
        return redirect()->route('newsletters.index');
    }
}
