<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index() {
        $members = Member::all();
        return view('members.index', compact('membres'));
    }
    
    public function create() {
        return view('member.create');
    }
    
    public function store(Request $request) {
        member::create($request->all());
        return redirect()->route('members.index');
    }
}
