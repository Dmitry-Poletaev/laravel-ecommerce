<?php

use Illuminate\Support\Facades\Route;


//Main
Route::get('/', 'HomeController@index');

//auth & user
Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/password-change', 'HomeController@changePassword')->name('password.change');
Route::post('/password-update', 'HomeController@updatePassword')->name('password.update');
Route::get('/user/logout', 'HomeController@logout')->name('user.logout');

//admin=======
Route::get('admin/home', 'AdminController@index');
Route::get('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'Admin\LoginController@login');
// Password Reset Routes...
Route::get('admin/password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin/reset/password/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('admin/update/reset', 'Admin\ResetPasswordController@reset')->name('admin.reset.update');
Route::get('/admin/сhange/password','AdminController@changePassword')->name('admin.password.change');
Route::post('/admin/password/update','AdminController@updatePass')->name('admin.password.update'); 
Route::get('admin/logout', 'AdminController@logout')->name('admin.logout');

//Admin section

//Categories
Route::get('admin/categories', 'Admin\Category\CategoryController@category')->name('categories');
Route::post('admin/store/category', 'Admin\Category\CategoryController@storeCategory')->name('store.category');
Route::get('delete/category/{id}', 'Admin\Category\CategoryController@deleteCategory');
Route::get('edit/category/{id}', 'Admin\Category\CategoryController@editCategory');
Route::post('update/category/{id}', 'Admin\Category\CategoryController@updateCategory');
//Brands
Route::get('admin/brands', 'Admin\Category\BrandController@brand')->name('brands');
Route::post('admin/store/brand', 'Admin\Category\BrandController@storeBrand')->name('store.brand');
Route::get('delete/brand/{id}', 'Admin\Category\BrandController@deleteBrand');
Route::get('edit/brand/{id}', 'Admin\Category\BrandController@editBrand');
Route::post('update/brand/{id}', 'Admin\Category\BrandController@updateBrand');
//Sub categories
Route::get('admin/subcategories', 'Admin\Category\SubCategoryController@subCategory')->name('sub.categories');
Route::get('admin/subcategories/create', 'Admin\Category\SubCategoryController@create')->name('create.subcategory');
Route::post('admin/store/subcategory', 'Admin\Category\SubCategoryController@storeSubCategory')->name('store.subcategory');
Route::get('delete/subcategory/{id}', 'Admin\Category\SubCategoryController@deleteSubCategory');
Route::get('edit/subcategory/{id}', 'Admin\Category\SubCategoryController@editSubCategory');
Route::post('update/subcategory/{id}', 'Admin\Category\SubCategoryController@updateSubCategory');
//Products
Route::get('admin/products', 'Admin\ProductController@product')->name('products');
Route::get('admin/product/create', 'Admin\ProductController@create')->name('create.product');
Route::post('admin/store/product', 'Admin\ProductController@storeProduct')->name('store.product');
Route::get('delete/product/{id}', 'Admin\ProductController@deleteProduct');
Route::get('edit/product/{id}', 'Admin\ProductController@editProduct');
Route::post('update/product/{id}', 'Admin\ProductController@updateProduct');
//Orders
Route::get('admin/orders', 'Admin\OrderController@getOrders')->name('orders');
Route::get('order/view/{id}', 'Admin\OrderController@viewOrder');
Route::get('order/delete/{id}', 'Admin\OrderController@deleteOrder');
//Settings
Route::get('admin/settings', 'Admin\SettingsController@siteSettings')->name('settings');
Route::post('admin/save/settings', 'Admin\SettingsController@saveSettings')->name('save.settings');
Route::post('admin/edit/settings', 'Admin\SettingsController@editSettings')->name('edit.settings');
//Banners
Route::get('admin/banners', 'Admin\BannersController@banners')->name('banners');
Route::post('admin/store/banner', 'Admin\BannersController@storeBanner')->name('store.banner');
Route::get('delete/banner/{id}', 'Admin\BannersController@deleteBanner');
Route::get('edit/banner/{id}', 'Admin\BannersController@editBanner');
Route::post('update/banner/{id}', 'Admin\BannersController@updateBanner');

//AJAX
//Subcategory
Route::get('get/subcategory/{category_id}', 'Admin\ProductController@getSubcat');
//Product filter
Route::get('product/filter/', 'ProductController@productFilter');
//Cart
Route::get('add/to/cart/{id}', 'CartController@addToCart');
//Search
Route::get('search/autocomplete', 'SearchController@autocomplete');



//Frontend
//Product
Route::get('/product/details/{id}', 'ProductController@productView');
Route::get('/product/all/{id}', 'ProductController@productsAll');
//Category
Route::get('/category/all/', 'FrontController@categoryAll');
//Cart
Route::get('cart', 'CartController@showCart')->name('cart');
Route::post('cart/update', 'CartController@cartUpdate')->name('cart.update');
Route::get('remove/cart/{id}', 'CartController@remove');
Route::get('cart/checkout', 'CartController@checkout');
Route::post('checkout/save', 'CartController@saveOrder')->name('checkout.save');
//Search
Route::get('search/result/', 'SearchController@search');
//Feedback
Route::post('send/notification/', 'HomeController@feedback');
//About
Route::get('/about', 'FrontController@about');
//Contact
Route::get('/contact', 'FrontController@contact');
//Delivery
Route::get('/delivery', 'FrontController@delivery');
//Warranty
Route::get('/warranty', 'FrontController@warranty');
//Policy
Route::get('/policy', 'FrontController@policy');
//Agreement
Route::get('/agreement', 'FrontController@agreement');
//Exchange
Route::get('/exchange', 'FrontController@exchange');
//Credit
Route::get('/credit', 'FrontController@credit');

