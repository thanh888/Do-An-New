<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use App\Models\Role;
use App\Models\Size;
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
        return view('homeUser.login.register');
    }
    public function postRegister(Request $request)
    {
        // $role = $this->role->where('name', 'user')->get();
        // $request->validate([
        //     'username'=> 'required',
        //     'email'=> 'unique:users,email' ,
        //     'password'=> 'min:8|max:20|required_with:confirm_passrord|same:confirm_passrord',
        //     'confirm_passrord'=> 'min:8'
        // ]);
        $this->user->create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password)
        ]);
        return redirect()->to(route('home.login'));
    }
    public function menu()
    {
        $categories= Category::all();
        // $qq= $categories->contains('id', 1);
        // dd($qq);
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
        
        // dd($request->all());
        if (auth()->check()) {
            
            $user =Cart::Where('user_id', auth()->user()->id)->get();
            $products = Cart::where('user_id', auth()->user()->id)->where('product_id', $id)->get();
            // dd($products->quantity);
            $data = [];
            foreach ($products as $product) {
                
                if ($user->contains('product_id', $id)) {
                    $data = $product;
                    if($request->quantity){
                        Cart::find($data->id)->update([
                            'quantity'=> $data->quantity+$request->quantity,
                        ]);

                    }
                    else{
                        Cart::find($data->id)->update([
                            'quantity'=> $data->quantity+1,
                        ]);

                    }
                    return response()->json([
                        'code'=>200,
                        'message'=>'fail'
                    ], 200);
                    break;
                }
                continue;
            }
            $product= Product::find($id);
            // $size= Size::find($request->size);
            $user= $this->user->find(auth()->user()->id);
            Cart::create([ 
                'user_id'=> auth()->user()->id,
                'product_id'=> $id,
                'name'=>$product->name,
                'image'=>$product->image,
                'size'=> $product->size,
                'quantity'=>$request->quantity,
                'price'=>$product->price * $request->quantity,

            ]);
            return response()->json([
                'code'=>200,
                'message'=>'fail'
            ], 200);
        }
        return redirect()->to(route('home.login'));
    }
    public function cart()
    {
        if (auth()->check()) {
            $products= Cart::where('user_id', auth()->user()->id)->get();
            // dd($products);
            return view('homeUser.pages.cart', compact('products'));
        }
        return redirect()->to(route('home.login'));

    }

    public function updateQuantity($id, Request $request)
    {
        $product= Cart::find($id);
        Cart::find($id)->update([
            'quantity'=> $request->quantity
        ]);
        return response()->json([
            'code'=>200,
            'message'=>'fail'
        ], 200);
    }
}

