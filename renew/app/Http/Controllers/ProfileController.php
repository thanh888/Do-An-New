<?php

namespace App\Http\Controllers;
use App\Models\UserInformation;
use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function index()
    {
        $profile= User::find(auth()->id());
        return view('homeUser.profile.index', compact('profile'));
        // return view('UserHome.profile.index');
    }
    function update(){
        $profile= User::find(auth()->id());
        return view('homeUser.Profile.update', compact('profile'));
    }
    function postupdate(Request $request){
        $data= User::find($request->id);
        $data->fullname=$request->fullname;
        $data->description=$request->description;
        $data->linkfb=$request->linkfb;
        $data->phone=$request->phone;
        $data->location=$request->location;
        $data->save();
        return redirect(route('profile.index'));
    }
    
}