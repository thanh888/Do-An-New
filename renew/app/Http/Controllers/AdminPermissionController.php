<?php

namespace App\Http\Controllers;

use App\Component\Recusive;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminPermissionController extends Controller
{
    private $permission;
    public function __construct(Permission $permisson)
    {
        $this->permission= $permisson;
    }
    public function create()
    {
        $data= $this->permission->all();

        $recusive=  new Recusive($data);
        
        $htmlOption= $recusive->permissionRecusive(0);
        return view('admin.permission.add', compact('htmlOption'));
    }
    
    public function store(Request $request){
        $perParent= $this->permission->find($request->parent_id);
        // dd($perParent);
        if($request->parent_id==0){
            $this->permission->create([
                'name'=> $request->name,
                'display_name'=> $request->display_name,
                'parent_id'=> $request->parent_id,
            ]);
            return redirect()->route('Permission.create');

        }
        $this->permission->create([
            'name'=> $request->name,
            'display_name'=> $request->display_name,
            'parent_id'=> $request->parent_id,
            'key_code'=> $request->key_code
        ]);
        return redirect()->route('Permission.create');
    }
    function getpermission($parentid){
        $data= $this->permission->all();

        $recusive=  new Recusive($data);
        
        $htmlOption= $recusive->permissionRecusive($parentid);
        return $htmlOption;
    }
}
