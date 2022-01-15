<?php 
namespace App\Services;
use Illuminate\Support\Facades\Gate;


class PermissionGatePolicyAccess{
    public function setGateAndPolicyAccess()
    {
        $this->defineGateCategory();
        $this->defineGateProduct();
        $this->defineGateUser();
        $this->defineGateRole();
        $this->defineGatePermission();
        $this->defineGateHomeAdmin();
        $this->defineGateOrder();

    }

    public function defineGateCategory()
    {
        Gate::define('category-list', function ($user) {
            return $user->checkPermissionAccess('list_category');
        });
        Gate::define('category-create', function ($user) {
            return $user->checkPermissionAccess('add_category');
        });
        Gate::define('category-edit', function ($user) {
            return $user->checkPermissionAccess('edit_category');
        });
        Gate::define('category-delete', function ($user) {
            return $user->checkPermissionAccess('delete_category');
        });
    }
    public function defineGateProduct()
    {
        Gate::define('product-list', function ($user) {
            return $user->checkPermissionAccess('list_product');
        });
        Gate::define('product-create', function ($user) {
            return $user->checkPermissionAccess('add_product');
        });
        Gate::define('product-edit', function ($user) {
            return $user->checkPermissionAccess('edit_product');
        });
        Gate::define('product-delete', function ($user) {
            return $user->checkPermissionAccess('delete_product');
        });
    }
    public function defineGateUser()
    {
        Gate::define('user-list', function ($user) {
            return $user->checkPermissionAccess('list_user');
        });
        Gate::define('user-create', function ($user) {
            return $user->checkPermissionAccess('add_user');
        });
        Gate::define('user-edit', function ($user) {
            return $user->checkPermissionAccess('edit_user');
        });
        Gate::define('user-delete', function ($user) {
            return $user->checkPermissionAccess('delete_user');
        });
    }
    public function defineGateRole()
    {
        Gate::define('role-list', function ($user) {
            return $user->checkPermissionAccess('list_role');
        });
        Gate::define('role-create', function ($user) {
            return $user->checkPermissionAccess('add_role');
        });
        Gate::define('role-edit', function ($user) {
            return $user->checkPermissionAccess('edit_role');
        });
        Gate::define('role-delete', function ($user) {
            return $user->checkPermissionAccess('delete_role');
        });
    }
    public function defineGatePermission()
    {
        Gate::define('permission-list', function ($user) {
            return $user->checkPermissionAccess('list_permission');
        });
        Gate::define('permission-create', function ($user) {
            return $user->checkPermissionAccess('add_permission');
        });
        Gate::define('permission-edit', function ($user) {
            return $user->checkPermissionAccess('edit_permission');
        });
        Gate::define('permission-delete', function ($user) {
            return $user->checkPermissionAccess('delete_permission');
        });
    }
    public function defineGateHomeAdmin()
    {
        Gate::define('admin-home', function ($user) {
            return $user->checkPermissionAccess('admin_home');
        });
        // Gate::define('admin-login', function ($user) {
        //     return $user->checkPermissionAccess('admin_login');
        // });
       
    }
    public function defineGateOrder()
    {
        Gate::define('list-order', function ($user) {
            return $user->checkPermissionAccess('list_order');
        });
        Gate::define('list-success', function ($user) {
            return $user->checkPermissionAccess('list_success');
        });
        Gate::define('list-destroy', function ($user) {
            return $user->checkPermissionAccess('list_destroy');
        });
       
    }
}