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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'PagesController@dashboard')->name('home')->middleware('auth');
// Route::get('/user', 'PagesController@user')->name('user')->middleware('auth');

Route::resource('users', 'UsersController')->middleware('auth');
Route::resource('suppliers', 'SuppliersController')->middleware('auth');
Route::resource('customers', 'CustomersController')->middleware('auth');
Route::resource('products', 'ProductsController')->middleware('auth');
Route::resource('brands', 'BrandsController')->middleware('auth');
Route::resource('units', 'UnitsController')->middleware('auth');
Route::resource('transactions', 'TransactionsController')->middleware('auth');
Route::resource('purchases', 'PurchasesController')->middleware('auth');
Route::get('/produk', 'PurchasesController@getProduct');
Route::get('/satuan', 'PurchasesController@getSatuan');
Route::get('/merek', 'PurchasesController@getMerek');
Route::get('/addSatuan', 'PurchasesController@addNewUnit');