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
    'uses'=> 'AdminController@index',
    // 'middleware'=> 'can:admin-home'
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
    Route::get('/Detele/{id}', [
        'as'=> 'cart.delete',
        'uses'=> 'UserHomeController@cartdelete'
    ]);
    Route::get("Checkout",[
        'as'=> 'home.checkout',
        'uses'=> 'UserHomeController@checkout'
    ]);

    Route::post('Order',[
        'as'=> 'home.orderr',
        'uses'=> 'UserHomeController@orderr'
    ]);

    Route::get('/set-appointment', [
        'as'=> 'home.setappointment',
        'uses'=> 'Appointment@set_appointment'
    ]);
    Route::get('/get-appointment', [
        'as'=> 'home.getappointment',
        'uses'=> 'Appointment@get_appointment'
    ]);
    Route::post('/confirm-appointment', [
        'as'=> 'home.successappointment',
        'uses'=> 'Appointment@confirm_appointment'
    ]);

    Route::get('/contact', [
        'as'=> 'home.contact',
        'uses'=> 'Contact@index'
    ]);
    
    Route::post('/send-contact', [
        'as'=> 'home.sendcontact',
        'uses'=> 'Contact@send_contact'
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
    Route::prefix('About')->group(function(){
        Route::get('/', [
            'as'=> 'about.index',
            'uses'=> 'AboutController@about'
        ]);
    });
    Route::prefix('Blog')->group(function(){
        Route::get('/', [
            'as'=> 'blog.index',
            'uses'=> 'BlogController@index'
        ]);
    });
    Route::prefix('Services')->group(function(){
        Route::get('/', [
            'as'=> 'services.index',
            'uses'=> 'ServicesController@index'
        ]);
    });
    
    Route::prefix('Cart')->group(function(){
        Route::get('update_quantity/{id}', [
            'as'=>'cart.updateQuantity',
            'uses'=> 'UserHomeController@updateQuantity'
        ]);
    });
    Route::prefix('profile')->group(function(){
        Route::get('',[
            'as'=> 'profile.index',
            'uses'=> 'ProfileController@index'
        ]);
        Route::get('/update-profile',[
            'as'=> 'profile.update',
            'uses'=> 'ProfileController@update'
        ]);
        Route::post('/pupdate-profile',[
            'as'=> 'profile.pupdate',
            'uses'=> 'ProfileController@postupdate'
        ]);
        Route::get('Postings', [
            'as'=> 'profile.postings',
            'uses'=> 'ProfileController@postings'
        ]);
    });
    // Route::prefix('Profile')->group(function(){
    //     Route::get('/', [
    //         'as'=> 'profile.index',
    //         'uses'=> 'ProfileController@index'
    //     ]);
    //     Route::get('/update-information', [
    //         'as'=> 'profile.update',
    //         'uses'=> 'ProfileController@update'
    //     ]);
    //     Route::post('/confirm-update', [
    //         'as'=> 'profile.confirm',
    //         'uses'=> 'ProfileController@confirm'
    //     ]);
    //     Route::get('/log-out', [
    //         'as'=> 'profile.logout',
    //         'uses'=> 'ProfileController@logout'
    //     ]);
    // });
});

//Admin
Route::prefix('Admin')->group(function(){
    Route::get('/login', [
        'as'=> 'Admin.login',
        'uses'=> 'AdminController@login',
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
Route::prefix('Ordered')->group(function(){
    Route::get('/',[
        'as'=>'order.index',
        'uses'=>'OrderController@index',
        'middleware'=>('can:list-order')

    ]);
    Route::get('/Success/{id}',[
        'as'=>'ship.success',
        'uses'=>'OrderController@success',

    ]);
    Route::get('/delete/{id}',[
        'as'=>'ship.delete',
        'uses'=>'OrderController@delete',

    ]);
    Route::get('/Danh sách giao thành công',[
        'as'=>'order.listsuccess',
        'uses'=>'OrderController@listsuccess',
        'middleware'=>('can:list-success')

    ]);
    Route::get('/Danh sách bị hủy',[
        'as'=>'order.listdestroy',
        'uses'=>'OrderController@listdestroy',
        'middleware'=>('can:list-destroy')

    ]);
});
 
Route::prefix('AdminTable')->group(function(){
    Route::get('/',[
        'as'=>'AdminTable.index',
        'uses'=>'AdminTable@index'
    ]);
    Route::get('/delete/{id}',[
        'as'=>'AdminTable.delete',
        'uses'=>'AdminTable@delete_table'
    ]);
    Route::get('/search',[
        'as'=>'AdminTable.search',
        'uses'=>'AdminTable@search_table'
    ]);
});

Route::prefix('AdminPosts')->group(function(){
    Route::get('/view-post',[
        'as'=>'AdminPosts.index',
        'uses'=>'Post@view'
    ]);
    Route::post('/update-post',[
        'as'=>'AdminPosts.post',
        'uses'=>'Post@post'
    ]);
});

Route::prefix('AdminContact')->group(function(){
    Route::get('/',[
        'as'=>'AdminContact.index',
        'uses'=>'AdminContact@index'
    ]);
    Route::get('/view-contact/{id}',[
        'as'=>'AdminContact.view',
        'uses'=>'AdminContact@eye_contact'
    ]);
});

Route::prefix('Category')->group(function(){
    Route::get('/', [
        'as'=> 'Category.index',
        'uses'=> "CategoryController@index",
        // 'middleware'=>('can:category-list')
    ]);
    Route::get('/create', [
        'as'=> 'Category.create',
        'uses'=> "CategoryController@create",
        // 'middleware'=>('can:category-create')
    ]);
    Route::post('/store', [
        'as'=> 'Category.store',
        'uses'=> "CategoryController@store",
    ]);
    Route::get('/edit/{id}', [
        'as'=> 'Category.edit',
        'uses'=> "CategoryController@edit",
        // 'middleware'=>('can:category-edit')
    ]);
    Route::post('/update/{id}', [
        'as'=> 'Category.update',
        'uses'=> "CategoryController@update",
    ]);
    Route::get('/delete/{id}', [
        'as'=> 'Category.delete',
        'uses'=> "CategoryController@delete",
        // 'middleware'=>('can:category-delete')
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