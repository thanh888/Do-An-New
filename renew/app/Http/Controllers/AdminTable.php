<?php

namespace App\Http\Controllers;
use App\Models\TbAppointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminTable extends Controller
{
    function index(){
        $data = TbAppointment::paginate(6);
        return view('admin.table.index',compact('data'));
    }
    function delete_table($id){
        $data= TbAppointment::find($id);
        $data->delete();
        return redirect(route('AdminTable.index'));
    }
    function search_table(Request $request){
        $data= TbAppointment::where('name','like','%'.$request->key.'%')->get();
        return view('admin.table.search_table',compact('data'));
    }
}