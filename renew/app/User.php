<?php

namespace App;

use App\Models\Product;
use App\Models\Role;
use App\Models\UserInformation;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_roles', 'user_id', 'role_id');
    }
    public function cart()
    {
        return $this->belongsToMany(Product::class, 'carts', 'user_id', 'product_id');
    }
    public function checkPermissionAccess($permissioncheck)
    {
        //b1 lay ra tat ca cac quyen cau user

        $roles= auth()->user()->roles;
        foreach ($roles as $role ) {
            $permission= $role->permissions;
            // dd($permission);
            if($permission->contains('key_code', $permissioncheck)){
                return true;
            }
        }
        return false;
        //b2 so sanh gia tri cua route hien tai xem co ton tai trong cac  quyen  maf minh lay duoc hay k
    }
    public function userinfor()
    {
        // return $this->belongsTo(UserInformation::class, 'user')
    }
}
