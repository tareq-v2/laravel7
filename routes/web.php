<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\bodyController;
use App\Http\Controllers\productController;




Route::get('/', function (){
    return view('Frontend.Layouts.home');
});

Route::get('/product', 'frontController@showProduct');
Route::get('/latestOffer', 'frontController@showOffer');
Route::get('/showBlog1', 'frontController@showBlog1');
Route::get('/showBlog2', 'frontController@showBlog2');
Route::get('/showBlog3', 'frontController@showBlog3');
Route::get('/userLogin', 'frontController@showLoginPag');
Route::get('/userRegister', 'frontController@showRegisterpage');
Route::get('/category', 'frontController@showCategorypage');
// Route::get('/myadmin', [adminController::class, 'adminFront']);

// Blog Post router
Route::get('/about-us', 'aboutUsController@index');

Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', 'backController@adminFront');
Route::get('/addCategory', 'categoryController@addCategory');
Route::get('/addAbout', 'aboutUsController@index');
Route::post('/about-store', 'aboutUsController@aboutus_store');



// Route for item
Route::get('/addItems', 'itemController@create');
Route::get('/item-view','itemController@itemView');
Route::post('/item-store','itemController@store');
Route::get('/item-edit/{id}', 'itemController@edit');
Route::post('/item-update/{id}', 'itemController@update');
Route::get('/item-delete/{id}', 'itemController@delete');
Route::get('/addCategory', 'categoryController@addCategory');

// Route for category
Route::get('/addCategory', 'categoryController@create');
Route::get('/category-view','categoryController@categoryView');
Route::post('/category-store','categoryController@store');
Route::get('/category-edit/{id}', 'categoryController@edit');
Route::post('/category-update/{id}', 'categoryController@update');
Route::get('/category-delete/{id}', 'categoryController@delete');


// single resource Route for Create- delete- add- update-
Route::resource('item-info', 'itemControllerResource');

// product route here
Route::get('/addProduct', 'productController@create');
Route::get('/product-view','productController@productView');
Route::post('/product-store','productController@store');
Route::get('/product-edit/{id}', 'productController@edit');
Route::post('/product-update/{id}', 'productController@update');
Route::get('/product-delete/{id}', 'productController@delete');