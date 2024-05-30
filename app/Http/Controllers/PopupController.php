<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;

class PopupController extends Controller
{
    public function store(Request $request){

        Post::create($request->all());
        return back()->('message','Sukses')
    }
}
