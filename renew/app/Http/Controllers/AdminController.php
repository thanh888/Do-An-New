<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    private $user;
    private $role;

    public function __construct(User $user, Role $role)
    {
        $this->user= $user;
        $this->role= $role;
    }
    public function index()
    {
        if (auth()->check()) {
            return view('admin.home');

        }
        return view('admin.login.index');
        // return view('admin.home');
    }   
    public function login()
    {
        // if (auth()->check()) {
        //     return redirect()->to(route('Admin.index'));
        // }
        return view('admin.login.index');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->to(route('Admin.login'));
    }
    public function postLogin(Request $request)
    {
        $remember = $request->has('remembered') ?true :false;
        // dd($request->all());
        if(Auth::attempt([
            'email' => $request->email, 
            'password' => $request->password,   
        ], $remember)){
            return redirect()->to(route('Admin.index'));
        }
        return redirect()->to(route('Admin.login'));

    }
    public function register()
    {
        return view('admin.login.register');
    }
    public function postRegister(Request $request)
    {
        // $role = $this->role->where('name', 'user')->get();
        $request->validate([
            'username'=> 'required',
            'email'=> 'unique:users,email' ,
            'password'=> 'min:8|max:20|required_with:confirm_passrord|same:confirm_passrord',
            'confirm_passrord'=> 'min:8'
        ]);
        $this->user->create([
            'name'=> $request->username,
            'email'=> $request->email,
            'password'=> Hash::make($request->password)
        ]);
        return redirect()->to(route('Admin.login'));
    }
}
