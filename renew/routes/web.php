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
//User
Route::prefix('home')->group(function(){
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
    
    Route::get('/menu', [
        'as'=> 'home.menu',
        'uses'=> 'UserHomeController@menu'
    ]);
    Route::get('/Chi-tiết-sản-phẩm/{id}', [
        'as'=> 'home.detail',
        'uses'=> 'UserHomeController@detail'
    ]);
    Route::post('/Add-To-Cart/{id}', [
        'as'=> 'home.AddToCart',
        'uses'=> 'UserHomeController@AddToCart'
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
Route::prefix('Product')->group(function(){
    Route::get('/', [
        'as'=> 'Product.index',
        'uses'=> "ProductController@index",
    ]);
    Route::get('/create', [
        'as'=> 'Product.create',
        'uses'=> "ProductController@create",
    ]);
    Route::post('/store', [
        'as'=> 'Product.store',
        'uses'=> "ProductController@store",
    ]);
    Route::get('/edit/{id}', [
        'as'=> 'Product.edit',
        'uses'=> "ProductController@edit",
    ]);
    Route::post('/update/{id}', [
        'as'=> 'Product.update',
        'uses'=> "ProductController@update",
    ]);
    Route::get('/delete/{id}', [
        'as'=> 'Product.delete',
        'uses'=> "ProductController@delete",
    ]);
});

Route::prefix('Roles')->group(function () {
    Route::get('/', [
        'as'=> 'Role.index',
        'uses'=> 'AdminRoleController@index',
    ]);
    Route::get('/create', [
        'as'=> 'Role.create',
        'uses'=> 'AdminRoleController@create',
    ]);
    Route::post('/store', [
        'as'=> 'Role.store',
        'uses'=> 'AdminRoleController@store',
    ]);
    Route::get('/edit/{id}', [
        'as'=> 'Role.edit',
        'uses'=> 'AdminRoleController@edit',
    ]);
    Route::post('/update/{id}', [
        'as'=> 'Role.update',
        'uses'=> 'AdminRoleController@update',
    ]);
    Route::get('/delete/{id}', [
        'as'=> 'Role.delete',
        'uses'=> 'AdminRoleController@delete',
    ]);
    
});

Route::prefix('Staff')->group(function () {
    Route::get('/', [
        'as'=> 'Staff.index',
        'uses'=> 'StaffController@index',
    ]);
    Route::get('/create', [
        'as'=> 'Staff.create',
        'uses'=> 'StaffController@create',
    ]);
    Route::post('/store', [
        'as'=> 'Staff.store',
        'uses'=> 'StaffController@store',
    ]);
    Route::get('/edit/{id}', [
        'as'=> 'Staff.edit',
        'uses'=> 'StaffController@edit',
    ]);
    Route::post('/update/{id}', [
        'as'=> 'Staff.update',
        'uses'=> 'StaffController@update',
    ]);
    Route::get('/delete/{id}', [
        'as'=> 'Staff.delete',
        'uses'=> 'StaffController@delete',
    ]);
});

Route::prefix('User')->group(function () {
    Route::get('/', [
        'as'=> 'User.index',
        'uses'=> 'AdminUserController@index',
    ]);
    Route::get('/create', [
        'as'=> 'User.create',
        'uses'=> 'AdminUserController@create',
    ]);
    Route::post('/store', [
        'as'=> 'User.store',
        'uses'=> 'AdminUserController@store',
    ]);
    Route::get('/edit/{id}', [
        'as'=> 'User.edit',
        'uses'=> 'AdminUserController@edit',
    ]);
    Route::post('/update/{id}', [
        'as'=> 'User.update',
        'uses'=> 'AdminUserController@update',
    ]);
    Route::get('/delete/{id}', [
        'as'=> 'User.delete',
        'uses'=> 'AdminUserController@delete',
    ]);
});

Route::prefix('Permission')->group(function () {
    Route::get('/create', [
        'as'=> 'Permission.create',
        'uses'=> 'AdminPermissionController@create',
    ]);
    Route::post('/store', [
        'as'=> 'Permission.store',
        'uses'=> 'AdminPermissionController@store',
    ]);
    
    
});