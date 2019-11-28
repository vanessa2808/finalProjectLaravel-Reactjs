<?php


Route::get('/', function () {
    return view('welcome'); 
});

Route::get('/welcome', 'HomeController@welcome')->name('welcome');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login', 'HomeController@login')->name('login');
Route::get('/register', 'HomeController@register')->name('register');
Route::view('/{path?}', 'welcome');
Route::get('/About', 'HomeController@About')->name('About');
Route::post('/admin/products/add_products', 'ProductController@post_add')->name('get_products');
Route::get('/admin/products/add_products','ProductController@get_add')->name('add_products');
Route::get('/admin/products/list_products','ProductController@list_products')->name('list_products');
Route::post('/admin/products/edit_products/{id}','ProductController@post_edit')->name('post_edit');
Route::get('/admin/products/edit_products/{id}','ProductController@get_edit')->name('get_edit');
Route::get('/admin/products/delete_products/{id}','ProductController@delete_products')->name('delete_products');
Route::get('/admin/users/add_users', 'UserController@get_addUsers')->name('get_addUsers');
Route::post('/admin/users/add_users', 'UserController@post_addUSers')->name('post_addUSers');
Route::get('/admin/users/list_users','UserController@list_users')->name('list_users');
 Route::get('/admin/users/edit_users/{id}','UserController@get_editUsers')->name('get_editUsers');
Route::post('/admin/users/edit_users/{id}', 'UserController@post_editUsers')->name('post_editUsers');
 Route::get('/admin/users/delete_users/{id}','UserController@delete_users')->name('delete_users');

Route::post('/admin/blog/add_blog', 'BlogController@post_addBlog')->name('post_addBlog');
Route::get('/admin/blog/add_blog', 'BlogController@get_addBlog')->name('get_addBlog');
Route::post('/admin/blog/edit_blog/{id}', 'BlogController@post_editBlog')->name('post_editBlog');
Route::get('/admin/blog/edit_blog/{id}', 'BlogController@get_editBlog')->name('get_editBlog');
Route::get('/admin/blog/delete_blog/{id}','BlogController@delete_blog')->name('delete_blog');
Route::post('/admin/categories/add_categories', 'categoriesController@post_addcategories')->name('post_addcategories');
Route::get('/admin/categories/add_categories', 'categoriesController@get_addcategories')->name('get_addcategories');
Route::get('/admin/categories/list_categories','categoriesController@list_categories')->name('list_categories');
Route::get('/admin/blog/list_blog','BlogController@list_blog')->name('list_blog');
Route::get('/admin/mailbox/mailbox','mailController@list_mail')->name('list_mail');
Route::get('ckeditor', 'CkeditorController@index');
Route::post('ckeditor/upload', 'CkeditorController@upload')->name('ckeditor.upload');

Auth::routes();
