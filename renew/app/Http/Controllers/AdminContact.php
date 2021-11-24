<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\TbContact;

class AdminContact extends Controller
{
    function index(){
        $data=TbContact::paginate(6);
        return view('admin.contact.index',compact('data'));
    }
    // function index(){
    //     $this->AuthLogin();
    //     $data=TbContact::paginate(6);
    //     return view('admin.admin_contact',['data'=>$data]);
    // }
    function eye_contact($id){
        $data = TbContact::find($id);
        return view('admin.contact.view_contact',compact('data'));
    }
}