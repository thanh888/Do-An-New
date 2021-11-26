<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AdminUserController extends Controller
{
    private $user;
    private $role;
    public function __construct(User $user, Role $role)
    {
        $this->role=$role;
        $this->user= $user;
    }
    public function index()
    {
        $users= $this->user->latest()->paginate(5);
        return view('admin.user.index', compact('users'));
    }
    public function create(){
        $roles= $this->role->all();
        return view('admin.user.add', compact('roles'));
    }
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $user =$this->user->create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=> Hash::make($request->password) ,
    
            ]);
            $user->roles()->attach($request->role);
           
            DB::commit();
            return redirect()->route('User.index');
        } catch (Exception $exception) {
            DB::rollback();
            Log::error("message", $exception->getMessage().'----Line '. $exception->getLine());
            
        }
    }
    public function edit($id)
    {
        $user= $this->user->find($id);
        $roles= $this->role->all();
        $roleUser= $user->roles;
        // dd($roleUser);
        return view('admin.user.edit', compact('user', 'roles', 'roleUser'));
    }
    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            
            $this->user->find($id)->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=> Hash::make($request->password) ,
    
            ]);
            $user =$this->user->find($id);
            $user->roles()->sync($request->role);
           
            DB::commit();
            return redirect()->route('User.index');
        } catch (Exception $exception) {
            DB::rollback();
            Log::error("message", $exception->getMessage().'----Line '. $exception->getLine());
        }
    }

    public function delete($id)
    {
        try {
            $this->user->find($id)->delete();
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
}
