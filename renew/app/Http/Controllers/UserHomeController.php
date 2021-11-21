<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use App\Models\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserHomeController extends Controller
{
    private $user;
    private $role;
    private $category;
    public function __construct(User $user, Role $role, Category $category)
    {
        $this->user= $user;
        $this->role= $role;
        $this->category= $category;
    }
    public function index()
    {
        return view('homeUser.pages.home');
    }   
    public function login()
    {
        // if (auth()->check()) {
        //     return redirect()->to(route('home.index'));
        // }
        return view('homeUser.login.index');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->to(route('home.login'));
    }
    public function postLogin(Request $request)
    {
        $remember = $request->has('remembered') ?true :false;
        // dd($request->all());
        if(Auth::attempt([
            'email' => $request->email, 
            'password' => $request->password,   
        ], $remember)){
            return redirect()->to(route('home.index'));
        }
        return redirect()->to(route('home.login'));

    }
    public function register()
    {
        return view('home.login.register');
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
        return redirect()->to(route('home.login'));
    }
    public function menu()
    {
        $categories= Category::all();
        return view('homeUser.pages.menu', compact('categories'));
    }

    public function detail($id)
    {
        $product= Product::find($id);
        // $size= $product->sizes();
        return view('homeUser.pages.product_detail', compact('product'));
    }

    public function AddToCart(Request $request, $id)
    {
        // dd($request->size);
        if (auth()->check()) {
            $product= Product::find($id);
            $user= $this->user->find(auth()->user()->id);
            Cart::create([ 
                'user_id'=> auth()->user()->id,
                'product_id'=> $id,
                'name'=>$product->name,
                'size'=> $request->size,
                'quantity'=>$request->quantity,
                'price'=>$product->price * $request->quantity,

            ]);
            return redirect()->to('home.detail');
        }
        return redirect()->to(route('home.login'));
    }
}

