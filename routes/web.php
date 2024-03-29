<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login','Users@login')->name('login');

Route::get('/','Customers@main_page')->name('main');
Route::get('shop','Customers@shop')->name('shop');
Route::get('cart','Customers@cart')->name('cart');
Route::get('checkout','Customers@checkout')->name('checkout');

Route::get('seller-login','Sellers@login')->name('seller.login');
Route::post('seller-logaction','Sellers@logaction')->name('seller.logaction');
Route::get('seller-register','Sellers@register')->name('seller.register');
Route::post('user-save','Sellers@save')->name('seller.save');

Route::get('ajax-products','Ajax@products')->name('ajax.products');

Route::group(['middleware'=> 'sellerauth'], function () {
    Route::get('seller-home','Sellers@shome')->name('seller.home');
    Route::get('logout','Sellers@logout')->name('logout');
});


Route::get('admin-login','Admins@login')->name('admin.login');
Route::post('admin-logaction','Admins@logaction')->name('admin.logaction');


Route::group(['middleware'=> 'adminauth'], function () {

    Route::get('admin-home','Admins@adminhome')->name('admin.home');

    Route::get('admin-add','Admins@add')->name('admin.add');
    Route::post('admin-save','Admins@save')->name('admin.save');
    Route::get('admins','Admins@report')->name('admins');

    Route::get('admin-view/{aid}','Admins@view')->name('admin.view');
    Route::get('admin-edit/{aid}','Admins@edit')->name('admin.edit');
    Route::post('admin-update','Admins@update')->name('admin.update');
    Route::get('image-delete/{aid}','Admins@image_delete')->name('image.delete');
    Route::get('admin-delete/{aid}','Admins@delete')->name('admin.delete');

    Route::get('seller-report','Admins@sellersreport')->name('seller.report');
    Route::get('seller-approve/{sid}','Sellers@approve')->name('seller.approve');
    Route::get('seller-reject/{sid}','Sellers@reject')->name('seller.reject');

    Route::get('roles','Roles@report')->name('roles');
    Route::get('role-view/{rid}','Roles@view')->name('role.view');
    Route::get('role-add','Roles@add')->name('role.add');
    Route::post('role-save','Roles@save')->name('role.save');
    Route::get('role-edit/{rid}','Roles@edit')->name('role.edit');
    Route::post('role-update','Roles@update')->name('role.update');
    Route::get('role-delete/{rid}','Roles@delete')->name('role.delete');

    Route::get('category-report','Categories@categoryreport')->name('category.report');
    Route::get('category-add','Categories@add')->name('category.add');
    Route::post('category-save','Categories@save')->name('category.save');
    Route::get('category-edit/{cid}','Categories@edit')->name('category.edit');
    Route::post('category-update','Categories@update')->name('category.update');
    Route::get('category-delete/{cid}','Categories@delete')->name('category.delete');

    Route::get('admin-logout','Admins@logout')->name('admin.logout');

    
    Route::get('product-report','ProductController@report')->name('products');
    Route::get('product-add','ProductController@add')->name('product.add');
    Route::post('product-save','ProductController@save')->name('product.save');
    Route::get('product-view/{pid}','ProductController@view')->name('product.view');
    Route::get('product-edit/{pid}','ProductController@edit')->name('product.edit');
    Route::post('product-update','ProductController@update')->name('product.update');
    Route::get('imgdelete/{pid}','ProductController@imgdelete')->name('imgdelete');
    Route::get('product-delete/{pid}','ProductController@delete')->name('product.delete');
    Route::get('itemdelete/{pid}/{img}','ProductController@itemdelete')->name('itemdelete');

    Route::get('brand-report','Brands@report')->name('brands');
    Route::get('brand-add','Brands@add')->name('brand.add');
    Route::post('brand-save','Brands@save')->name('brand.save');
    Route::get('brand-edit/{bid}','Brands@edit')->name('brand.edit');
    Route::post('brand-update','Brands@update')->name('brand.update');
    Route::get('brand-delete/{bid}','Brands@delete')->name('brand.delete');

    Route::get('Banners','Banners@report')->name('banner.report');
    Route::get('Banner-add','Banners@add')->name('banner.add');
    Route::post('Banner-save','Banners@save')->name('banner.save');
    Route::get('Banner-edit/{rid}','Banners@edit')->name('banner.edit');
    Route::post('Banner-update','Banners@update')->name('banner.update');
    Route::get('Banner-delete/{rid}','Banners@delete')->name('banner.delete');
    
});