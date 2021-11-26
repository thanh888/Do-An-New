<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    use SoftDeletes;
    private $product;
    private $category;
    public function __construct(Product $product, Category $category)
    {
        $this->product=$product;
        $this->category= $category;
    }
    public function index()
    {
        if(auth()->check()){

            $products= $this->product->all();
            return view('admin.product.index', compact('products'));

        }
    }

    public function create()
    {
        $categories = $this->category->all();
        $sizes= Size::all();
        return view('admin.product.add', compact( 'categories', 'sizes'));
    }

    
    public function store(Request $request)
    {
        $data= array();
        $data['name']= $request->name;
        $data['size']= $request->size;
        $data['price']= $request->price;
        $data['category_id']= $request->category_id;
        $data['description']= $request->description;

        $get_image= $request->file('image');
        // dd($get_image);
        if($get_image){
            $name_image = $get_image->getClientOriginalName();
            $new_image= $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('uploads/products',$new_image);
            $data['image']= $new_image;
            $product= $this->product->create($data);
            // $product->sizes()->attach($request->size);
            Session::put('message','Success');
            return redirect()->route('Product.index');

        }
        $data['image']= '';
        $product= $this->product->create($data);
        // $product->sizes()->attach($request->size);
        Session::put('message','Success');
        return redirect()->route('Product.index');

    }
    public function edit($id){
        $product= $this->product->find($id);
        $categories= $this->category->get();
        $sizes= Size::all();
        $sizeUsed= $product->sizes;

        return view('admin.product.edit', compact('product', 'categories', 'sizes','sizeUsed'));
    }

    public function update(Request $request, $id)
    {
        $data= array();
        $data['name']= $request->name;
        $data['size']= $request->size;
        $data['price']= $request->price;
        $data['category_id']= $request->category_id;
        $data['description']= $request->description;

        $get_image= $request->file('image');
        // dd($get_image);
        if($get_image){
            $name_image = $get_image->getClientOriginalName();
            $new_image= $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('uploads/products',$new_image);
            $data['image']= $new_image;
            $product= $this->product->find($id)->update($data);
            // $product->sizes()->sync($request->size);
            Session::put('message','Success');
            return redirect()->route('Product.index');

        }
        $this->product->find($id)->update($data);
        $product= $this->product->find($id);
        // $product->sizes()->sync($request->size);
        Session::put('message','Success');

        return redirect()->route('Product.index');

    }
    public function delete($id){
        // $result=DB::table('products')->where('id', $id)->delete();
        $result = $this->product->where('id',$id)->delete();
        // dd($result);
        
        return redirect()->route('Product.index');
    }


}
