<?php
use App\Mail\GreetMail;
use Illuminate\Support\Facades\Mail;
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


Route::get('send','MailController@send');




// Route::get('/email',function(){
//     Mail::to('hinalilaram@gmail.com')->send(new GreetMail());
//     return new GreetMail();
// });
//Admin
// Route::get('/',['uses'=>'AdminController@show', 'as'=>'admin.show']);
// Route::get('/employee',['uses'=>'EmployeeController@show', 'as'=>'employee.show']);
// Route::get('/admincreate',['uses'=>'AdminController@create', 'as'=>'admin.create']);
// Route::get('/empedit',['uses'=>'AdminController@edit', 'as'=>'admin.edit']);
// Route::post('empcreates',['uses'=>'EmployeeController@create', 'as'=>'employee.create']);
// Route::get('/empstore',['uses'=>'EmployeeController@store', 'as'=>'employee.store']);
// Route::get('/employeeedit',['uses'=>'EmployeeController@edit', 'as'=>'employee.edit']);
// Route::get('/employeedel',['uses'=>'EmployeeController@del', 'as'=>'employee.del']);
// Route::post('/empupdate',['uses'=>'EmployeeController@update', 'as'=>'employee.update']);
// Route::get('/depcreates',['uses'=>'DepartmentController@create', 'as'=>'department.create']);
// Route::get('/depedits',['uses'=>'DepartmentController@edit', 'as'=>'department.edit']);
// Route::get('/depfilter',['uses'=>'DepartmentController@filter', 'as'=>'department.filter']);
// Route::get('/rolefilter',['uses'=>'FilterController@role', 'as'=>'filter.role']);

// //Customers
// Route::get('dashboard','CustomerController@dashboard')->name('dashboard');
// Route::get('order','CustomerController@order')->name('order');
// Route::get('customer','CustomerController@customer')->name('customer');
// Route::get('status','CustomerController@status')->name('status');
// Route::get('update','CustomerController@update')->name('update');
// Route::post('searchcustomer','CustomerController@searchcustomer')->name('searchcustomer');
// Route::post('searchorder','CustomerController@searchorder')->name('searchorder');
// Route::post('updatestatus','CustomerController@updatestatus')->name('updatestatus');
// Route::post('updatecustomer','CustomerController@updatecustomer')->name('updatecustomer');
// Route::get('deletecustomer','CustomerController@deletecustomer')->name('deletecustomer');
// Route::get('deleteorder','CustomerController@deleteorder')->name('deleteorder');
// Route::get('orderdetail','CustomerController@orderdetail')->name('orderdetail');
// Route::get('allorder','CustomerController@allorder')->name('allorder');
// Route::get('customerwish','CustomerController@customerwish')->name('customerwish');

// //Products
// Route::get('productdetail','ProductController@detail')->name('detail');
// Route::get('dash','AdminController@index')->name('dash');
// Route::get('category','CategoryController@index')->name('category');
// Route::post('/lcategory',['uses'=>'CategoryController@store', 'as'=>'lcategory.store']);
// Route::get('subcategory','SubcategoryController@index')->name('subcategory');
// Route::get('/lsubcategory',['uses'=>'SubcategoryController@store', 'as'=>'lsubcategory.store']);
// Route::get('product','ProductController@index')->name('product');
// Route::get('subcategorylist','ProductController@show');
// Route::post('/lproduct',['uses'=>'ProductController@store', 'as'=>'lproduct.store']);
// Route::get('editcategory',['uses'=>'CategoryController@edit', 'as'=>'category.edit']);
// Route::post('updatecategory',['uses'=>'CategoryController@update', 'as'=>'category.update']);
// Route::get('delcategory',['uses'=>'CategoryController@del', 'as'=>'category.del']);
// Route::get('editsubcategory',['uses'=>'SubcategoryController@edit', 'as'=>'subcategory.edit']);
// Route::get('updatesubcategory',['uses'=>'SubcategoryController@update', 'as'=>'subcategory.update']);
// Route::get('delsubcategory',['uses'=>'SubcategoryController@del', 'as'=>'subcategory.del']);
// Route::get('editproduct',['uses'=>'ProductController@edit', 'as'=>'product.edit']);
// Route::post('updateproduct',['uses'=>'ProductController@update', 'as'=>'product.update']);
// Route::get('delproduct',['uses'=>'ProductController@del', 'as'=>'product.del']);
// Route::get('viewall','ViewallController@viewall')->name('viewall');
// Route::post('search','ViewallController@search')->name('search');
// Route::get('wishlist','WishlistController@index')->name('wishlist');
// Route::get('wishdestroy','WishlistController@destroy')->name('wishdestroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
