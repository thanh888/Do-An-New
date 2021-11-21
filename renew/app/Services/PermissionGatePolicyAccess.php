<?php 
namespace App\Services;
use Illuminate\Support\Facades\Gate;


class PermissionGatePolicyAccess{
    public function setGateAndPolicyAccess()
    {
        $this->defineGateCategory();
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
}