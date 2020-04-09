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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pages', 'PagesController@index');
Route::get('/pages/{id}', 'PagesController@singlePage');

Route::get('/login', 'UserController@login');
Route::post('/login/action', 'UserController@loginAction');

Route::get('/', 'PagesController@index');
Route::get('/keranjang', 'PagesController@keranjang');
Route::get('/sign-out', 'DashboardController@signOut');

Route::get('/produk', 'ProdukController@index');
Route::get('/produk/add', 'ProdukController@produkAdd');
Route::post('/produk/add/save', 'ProdukController@produkAddSave');
Route::get('/produk/edit/{id}', 'ProdukController@produkEdit');
Route::post('/produk/edit/save', 'ProdukController@produkEditSave');
Route::get('/produk/detail/{id}', 'ProdukController@produkDetail');
Route::get('/produk/delete/{id}', 'ProdukController@produkDelete');

Route::get('/kategori', 'KategoriController@index');
Route::get('/kategori/add', 'KategoriController@kategoriAdd');
Route::post('/kategori/add/save', 'KategoriController@kategoriAddSave');
Route::get('/kategori/edit/{id}', 'KategoriController@kategoriEdit');
Route::post('/kategori/edit/save', 'KategoriController@kategoriEditSave');
Route::get('/kategori/delete/{id}', 'KategoriController@kategoriDelete');

Route::get('/supplier', 'SupplierController@index');
Route::get('/supplier/add', 'SupplierController@supplierAdd');
Route::post('/supplier/add/save', 'SupplierController@supplierAddSave');
Route::get('/supplier/edit/{id}', 'SupplierController@supplierEdit');
Route::post('/supplier/edit/save', 'SupplierController@supplierEditSave');
Route::get('/supplier/delete/{id}', 'SupplierController@supplierDelete');
