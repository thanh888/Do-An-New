<?php
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
    'as'=> 'Admin.index',
    'uses'=> 'AdminController@index'
]);
Route::get('/home', [
    'as'=> 'home.index',
    'uses'=> 'UserHomeController@index'
]);
//homme
Route::prefix('Home')->group(function(){
    Route::get('/login', [
        'as'=> 'home.login',
        'uses'=> 'UserHomeController@login'
    ]);
    Route::get('/register', [
        'as'=> 'home.register',
        'uses'=> 'UserHomeController@register'
    ]);
    Route::get('/logout', [
        'as'=> 'home.logout',
        'uses'=> 'UserHomeController@logout'
    ]);
    Route::post('/login', [
        'as'=> 'home.postLogin',
        'uses'=> 'UserHomeController@postLogin'
    ]);
    Route::post('/postRegister', [
        'as'=> 'home.postRegister',
        'uses'=> 'UserHomeController@postRegister'
    ]);
    Route::get('/Cart', [
        'as'=> 'home.cart',
        'uses'=> 'UserHomeController@cart'
    ]);

    //menu
    Route::prefix('Menu')->group(function(){
        Route::get('/', [
            'as'=> 'Menu.index',
            'uses'=> 'UserHomeController@menu'
        ]);
        Route::get('/product-detail/{id}', [
            'as'=> 'Menu.detail',
            'uses'=> 'UserHomeController@detail'
        ]);
        Route::get('/Add-To-Cart/{id}', [
            'as'=> 'Menu.AddToCart',
            'uses'=> 'UserHomeController@AddToCart'
        ]);

    });
    
    Route::prefix('Cart')->group(function(){
        
    });

    Route::prefix('Profile')->group(function(){
        Route::get('/', [
            'as'=> 'profile.index',
            'uses'=> 'ProfileController@index'
        ]);
    });
});

//Admin
Route::prefix('Admin')->group(function(){
    Route::get('/login', [
        'as'=> 'Admin.login',
        'uses'=> 'AdminController@login'
    ]);
    Route::get('/register', [
        'as'=> 'Admin.register',
        'uses'=> 'AdminController@register'
    ]);
    Route::get('/logout', [
        'as'=> 'Admin.logout',
        'uses'=> 'AdminController@logout'
    ]);
    Route::post('/login', [
        'as'=> 'Admin.postLogin',
        'uses'=> 'AdminController@postLogin'
    ]);
    Route::post('/postRegister', [
        'as'=> 'Admin.postRegister',
        'uses'=> 'AdminController@postRegister'
    ]);

});


// Route::prefix('Admin')->group(function(){
//     Route::get('/', function ($id) {
        
//     });
// });

Route::prefix('Category')->group(function(){
    Route::get('/', [
        'as'=> 'Category.index',
        'uses'=> "CategoryController@index",
        'middleware'=>('can:category-list')
    ]);
    Route::get('/create', [
        'as'=> 'Category.create',
        'uses'=> "CategoryController@create",
        'middleware'=>('can:category-create')
    ]);
    Route::post('/store', [
        'as'=> 'Category.store',
        'uses'=> "CategoryController@store",
    ]);
    Route::get('/edit/{id}', [
        'as'=> 'Category.edit',
        'uses'=> "CategoryController@edit",
        'middleware'=>('can:category-edit')
    ]);
    Route::post('/update/{id}', [
        'as'=> 'Category.update',
        'uses'=> "CategoryController@update",
    ]);
    Route::get('/delete/{id}', [
        'as'=> 'Category.delete',
        'uses'=> "CategoryController@delete",
        'middleware'=>('can:category-delete')
    ]);
});

Route::prefix('Product')->group(function(){
    Route::get('/', [
        'as'=> 'Product.index',
        'uses'=> "ProductController@index",
        'middleware'=>('can:product-list')
    ]);
    Route::get('/create', [
        'as'=> 'Product.create',
        'uses'=> "ProductController@create",
        'middleware'=>('can:product-list')
    ]);
    Route::post('/store', [
        'as'=> 'Product.store',
        'uses'=> "ProductController@store",
        'middleware'=>('can:product-list')
    ]);
    Route::get('/edit/{id}', [
        'as'=> 'Product.edit',
        'uses'=> "ProductController@edit",
        'middleware'=>('can:product-list')
    ]);
    Route::post('/update/{id}', [
        'as'=> 'Product.update',
        'uses'=> "ProductController@update",
        'middleware'=>('can:product-list')
    ]);
    Route::get('/delete/{id}', [
        'as'=> 'Product.delete',
        'uses'=> "ProductController@delete",
        'middleware'=>('can:product-list')
    ]);
});

Route::prefix('Roles')->group(function () {
    Route::get('/', [
        'as'=> 'Role.index',
        'uses'=> 'AdminRoleController@index',
        'middleware'=>('can:role-list')
    ]);
    Route::get('/create', [
        'as'=> 'Role.create',
        'uses'=> 'AdminRoleController@create',
        'middleware'=>('can:role-list')
    ]);
    Route::post('/store', [
        'as'=> 'Role.store',
        'uses'=> 'AdminRoleController@store',
        'middleware'=>('can:role-list')
    ]);
    Route::get('/edit/{id}', [
        'as'=> 'Role.edit',
        'uses'=> 'AdminRoleController@edit',
        'middleware'=>('can:role-list')
    ]);
    Route::post('/update/{id}', [
        'as'=> 'Role.update',
        'uses'=> 'AdminRoleController@update',
        'middleware'=>('can:role-list')
    ]);
    Route::get('/delete/{id}', [
        'as'=> 'Role.delete',
        'uses'=> 'AdminRoleController@delete',
        'middleware'=>('can:role-list')
    ]);
    
});

Route::prefix('User')->group(function () {
    Route::get('/', [
        'as'=> 'User.index',
        'uses'=> 'AdminUserController@index',
        'middleware'=>('can:user-list')
    ]);
    Route::get('/create', [
        'as'=> 'User.create',
        'uses'=> 'AdminUserController@create',
        'middleware'=>('can:user-list')
    ]);
    Route::post('/store', [
        'as'=> 'User.store',
        'uses'=> 'AdminUserController@store',
        'middleware'=>('can:user-list')
    ]);
    Route::get('/edit/{id}', [
        'as'=> 'User.edit',
        'uses'=> 'AdminUserController@edit',
        'middleware'=>('can:user-list')
    ]);
    Route::post('/update/{id}', [
        'as'=> 'User.update',
        'uses'=> 'AdminUserController@update',
        'middleware'=>('can:user-list')
    ]);
    Route::get('/delete/{id}', [
        'as'=> 'User.delete',
        'uses'=> 'AdminUserController@delete',
        'middleware'=>('can:user-list')
    ]);
});

Route::prefix('Permission')->group(function () {
    Route::get('/create', [
        'as'=> 'Permission.create',
        'uses'=> 'AdminPermissionController@create',
        // 'middleware'=>('can:permission-list')
    ]);
    Route::post('/store', [
        'as'=> 'Permission.store',
        'uses'=> 'AdminPermissionController@store',
        // 'middleware'=>('can:permission-list')
    ]);
    
    
});
