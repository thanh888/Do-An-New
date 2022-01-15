<?php

namespace App\Http\Controllers;

use App\Models\ListDestroy;
use App\Models\ListSuccess;
use App\Models\Ordered_List;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    public function index()
    {
        $products= Ordered_List::all();
        // dd($products);
        return view('admin.order.index', compact('products'));
    }
    public function success($id)
    {
        try {
            $product= Ordered_List::find($id);
            ListSuccess::create([
                'user_id'=> $product->user_id,
                'product_id'=> $product->product_id,
                'name_customer'=> $product->name_customer,
                'name_product'=> $product->name_product,
                'image_product'=> $product->image_product,
                'price'=> $product->price,
                'address'=> $product->address,
                'phone'=> $product->phone,
                'note'=> $product->note,
                'status'=> $product->status,
            ]);
            $product->delete();
            return response()->json([
                'code'=>200,
                'message'=>'fail'
            ], 200);
        }catch (\Exception $exception) {
            Log::error("message". $exception->getMessage().'line: '. $exception->getLine());
            return response()->json([
                'code'=>500,
                'message'=>'fail'
            ], 500);
        }
    }
    public function delete($id)
    {
        
        try {
            $product= Ordered_List::find($id);
            ListDestroy::create([
                'user_id'=> $product->user_id,
                'product_id'=> $product->product_id,
                'name_customer'=> $product->name_customer,
                'name_product'=> $product->name_product,
                'image_product'=> $product->image_product,
                'price'=> $product->price,
                'address'=> $product->address,
                'phone'=> $product->phone,
                'note'=> $product->note,
                'status'=> $product->status,
            ]);
            // $product->delete();
            return response()->json([
                'code'=>200,
                'message'=>'fail'
            ], 200);
        }catch (\Exception $exception) {
            Log::error("message". $exception->getMessage().'line: '. $exception->getLine());
            return response()->json([
                'code'=>500,
                'message'=>'fail'
            ], 500);
        }
    }
    public function listsuccess()
    {
        $products= ListSuccess::all();
        return view('admin.order.listsuccess', compact('products'));

    }
    public function listdestroy()
    {
        $products= ListDestroy::all();
        return view('admin.order.listdestroy', compact('products'));
    }
}
