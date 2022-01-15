<?php

namespace App\Http\Controllers;
use App\Models\UserInformation;
use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function index()
    {
        
        $user= UserInformation::where('user_id', auth()->user()->id)->get()->first();
        return view('homeUser.profile.index',compact('user'));
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
    // public function index()
    // {
    //     $user= UserInformation::firstWhere('user_id', auth()->user()->id);
    //     return view('homeUser.profile.index',compact('user'));
    // }
    // function update(){
    //     $user= UserInformation::firstWhere('user_id', auth()->user()->id);
    //     return view('homeUser.profile.update',compact('user'));
    // }
    // function confirm(Request $request){
    //     $data= UserInformation::find($request->id);
    //     $data->name=$request->name;
    //     $data->favourite=$request->favourite;
    //     $data->linkfb=$request->linkfb;
    //     $data->number_phone=$request->number_phone;
    //     $data->location=$request->location;
    //     $data->save();
    //     return redirect(route('profile.index'));
    // }
    // function logout(){
    //     return redirect(route('home.index'));
    // }
}