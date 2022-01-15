<?php

namespace App\Http\Controllers;
use App\Models\UserInformation;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        
        $user= UserInformation::where('user_id', auth()->user()->id)->get()->first();
        return view('homeUser.profile.index',compact('user'));
    }
    function update(){
        $user= UserInformation::firstWhere('user_id', auth()->user()->id);
        return view('homeUser.profile.update',compact('user'));
    }
    function confirm(Request $request){
        $data= UserInformation::find($request->id);
        $data->name=$request->name;
        $data->favourite=$request->favourite;
        $data->linkfb=$request->linkfb;
        $data->number_phone=$request->number_phone;
        $data->location=$request->location;
        $data->save();
        return redirect(route('profile.index'));
    }
    function logout(){
        return redirect(route('home.index'));
    }
}