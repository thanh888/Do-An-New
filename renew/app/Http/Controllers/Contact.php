<?php

namespace App\Http\Controllers;
use App\Models\TbContact;
use Illuminate\Http\Request;

class Contact extends Controller
{
    function index(){
        return view('homeUser.pages.contact');
    }
    function send_contact(Request $request){
        if(auth()->check()){
            $data = new TbContact();
            $data->name=$request->name;
            $data->email=$request->email;
            $data->title=$request->title;
            $data->content=$request->content;
            $data->save();
            return redirect(route('home.contact'));
        }else{
            echo'<script> alert("Bạn phải đăng nhập")</script>';
            return view('homeUser.login.index');
        }
    }
}