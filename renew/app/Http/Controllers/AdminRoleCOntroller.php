<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AdminRoleCOntroller extends Controller
{
    
    private $role;
    private $permission;
    public function __construct(Role $role, Permission $permission)
    {
        $this->role= $role;
        $this->permission= $permission;
    }
    public function index()
    {
        $roles= $this->role->paginate(5);
        return view('admin.role.index', compact('roles'));
    }
    public function create()
    {
        $permissionParent =$this->permission->where('parent_id', 0)->get();
        return view('admin.role.add', compact('permissionParent'));
    }
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $role= $this->role->create([
                'name'=> $request->name,
                'display_name'=>$request->display_name,
    
            ]);
            $role->permissions()->attach($request->permission_id);
            DB::commit();
            return redirect()->to(route('Role.index'));
        } catch (Exception $exception) {
            DB::rollback();
            Log::error("message", $exception->getMessage().'--line '.$exception->getLine());
        }
       
    }
    public function edit($id)
    {
        $permissionParent= $this->permission->where('parent_id', 0)->get();
        $role= $this->role->find($id);
        $permissionchecked= $role->permissions;
        return view('admin.role.edit', compact('role', 'permissionParent', 'permissionchecked'));
    }
    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $this->role->find($id)->update([
                'name'=> $request->name,
                'display_name'=>$request->display_name,
    
            ]);
            $role= $this->role->find($id);
            $role->permissions()->sync($request->permission_id);
            DB::commit();
            return redirect()->to(route('Role.index'));
        } catch (Exception $exception) {
            DB::rollback();
            Log::error("message", $exception->getMessage().'--line '.$exception->getLine());
        }
       
    }

}
