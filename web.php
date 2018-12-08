<?php
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
//frontend site...........
Route::get('/','HomeController@index');
//backend routes.......................
Route::get('/admin','AdminController@index');
Route::post('/admin-dashboard','AdminController@dashboard');
Route::get('/logout','SuperAdminController@logout'); 
//category related routes
Route::get('/add-category','CategoryController@index'); 
Route::get('/all-category','CategoryController@all_category'); 
Route::post('/save-category','CategoryController@save_category'); 
Route::get('/edit-category/{category_id}','CategoryController@edit_category'); 
Route::post('/update-category/{category_id}','CategoryController@update_category'); //updates category according to the category id
Route::get('/delete-category/{category_id}','CategoryController@delete_category'); //calls delete category function

//manufacture or brands routes are here

Route::get('/add-manufacture','ManufactureController@index');
Route::post('/save-manufacture','ManufactureController@save_manufacture');
Route::get('/all-manufacture','ManufactureController@all_manufacture');
Route::get('/delete-manufacture/{manufacture_id}','ManufactureController@delete_manufacture');
Route::get('/edit-manufacture/{manufacture_id}','ManufactureController@edit_manufacture');
Route::post('/update-manufacture/{manufacture_id}','ManufactureController@update_manufacture');