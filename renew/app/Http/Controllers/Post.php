<?php

namespace App\Http\Controllers;
use App\Models\Posts;
use Illuminate\Http\Request;

class Post extends Controller
{
    function view(){
       $data = Posts::find(1);
       return view('admin.tbpost.postupdate',compact('data'));
    }
    function post(Request $request){
        $post = Posts::find(1);
        $post->content= $request->content;
        $post->save();
        return redirect(route('AdminPosts.index'));
    }
}