<?php

namespace App\Http\Controllers;
use App\Models\Posts;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    function about(){
        $pt = Posts::find(1);
        return view('homeUser.pages.about',compact('pt'));
    }
}