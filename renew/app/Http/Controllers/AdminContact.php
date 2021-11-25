<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\TbContact;

class AdminContact extends Controller
{
    function index(){
        if(auth()->check()){
            $data=TbContact::paginate(6);
            return view('admin.contact.index',compact('data'));
        }else{
            return view('admin.login.index');
        }
    }
    function eye_contact($id){
        $data = TbContact::find($id);
        return view('admin.contact.view_contact',compact('data'));
    }
}