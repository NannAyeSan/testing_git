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

//frontend

Route::get('/', 'PageController@mainfun')->name('mainpage');

Route::get('brand', 'PageController@brandfun')->name('brandpage');

 //Route::get('login', 'PageController@loginfun')->name('loginpage');

Route::get('register', 'PageController@registerfun')->name('registerpage');

Route::get('shoppingcart', 'PageController@shoppingcartfun')->name('shoppingcartpage');

Route::get('promotion', 'PageController@promotionfun')->name('promotionpage');

Route::get('itemdetail', 'PageController@itemdetailfun')->name('itemdetailpage');

Route::get('subcategory', 'PageController@subcategoryfun')->name('subcategorypage');



//backend



Route::resource('brands','BrandController');

Route::resource('categories','CategoryController');

Route::resource('subcategories','SubcategoryController');


Route::resource('orders','OrderController');


Route::middleware('role:Admin')->group(function()
{
Route::get('dashboard', 'BackendController@dashboardfun')->name('dashboardpage');
Route::resource('items','ItemController');

Route::get('backendroute','BackendController@backendfun')->name('backendpage');
Route::get('orderlists','BackendController@orderlist')->name('orderlist');
Route::get('orderdetail/{id}','BackendController@orderdetail')->name('orderdetail');
});


Auth::routes();
Route::get('loginform', 'PageController@loginfun')->name('loginpage');

Route::get('/home', 'HomeController@index')->name('home');
