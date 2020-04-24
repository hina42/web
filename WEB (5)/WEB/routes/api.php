<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//products

Route::resource('product','ApiProductController');
Route::resource('category','ApiCategoryController');
Route::resource('subcategory','ApiSubcategoryController');
Route::resource('color','ApiColorController');
Route::resource('yard','ApiYardController');
Route::resource('size','ApiSizeController');
Route::resource('description','ApiDescriptionController');
Route::post('updateprd','ApiProductController@updateprd');
Route::post('updatecat','ApiCategoryController@updatecat');
//employees
Route::resource('departments','departmentController');
Route::resource('privileges','privilegecontroller');
Route::resource('employees','employeeController');
Route::resource('addresses','addressController');
//Route::resource('AllTableData','AllTableDataController');
Route::resource('roles','roleController');
Route::resource('statuses','statuseController');
//customers
Route::resource('customerdetail','CustomerdetailController');
Route::resource('customersize','CustomersizeController');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('mycategory','ApiCategoryController@mycategory');
