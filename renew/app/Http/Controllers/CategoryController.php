<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    use SoftDeletes;
    private $category;
    public function __construct(Category $category)
    {
        $this->category=$category;
    }
    public function index(){
        $categories = $this->category::all();
        return view('admin.category.index', compact('categories'));
    }
    public function create(){
        return view('admin.category.add');
    }
    public function store(Request $request){
        $this->category->create([
            'name'=>$request->name
        ]);
        Session::put('message','Success');
        return Redirect::to(route('Category.create'));
    }
    public function edit($id)
    {
        $category= $this->category->find($id);
        return view('admin.category.edit', compact('category'));
    }
    // public function edit_category_products($category_product_id){
    //     $edit_category_products = DB::table('tbl_category_product')->where('category_id',$category_product_id)->get();
    //     $manager_category_product = view('admin.all_category_product')->with('edit_category_product',$edit_category_products);
    //     return view('admin_layout')->with('admin.all_category_product',$manager_category_product);
    // }
    public function update(Request $request,$id){
        $this->category->find($id)->update([
            'name'=> $request->name
        ]);
        return Redirect::to(route('Category.index'));
    }
    public function delete($id){
        $this->category->find($id)->delete();
        return Redirect::to(route('Category.index'));
    }
}
