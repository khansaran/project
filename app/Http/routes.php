<?php

Route::group(['middleware' => ['web']], function () {
        Route::get('/', function(){
            return view('home');
        }); 
	Route::get('language/{lang}', 'HomeController@language')->where('lang', '[A-Za-z_-]+');
	// Admin
	Route::get('admin', [
		'uses' => 'AdminController@adminpingit',
		'as' => 'admin',
                'middleware' => 'admin'
	]);

	Route::get('medias', [
		'uses' => 'AdminController@filemanager',
		'as' => 'medias',
		'middleware' => 'admin'
	]);

	// User
	Route::get('user/sort/{role}', 'UserController@indexSort');

	Route::get('user/roles', 'UserController@getRoles');
	Route::post('user/roles', 'UserController@postRoles');

	Route::put('userseen/{user}', 'UserController@updateSeen');

	Route::resource('user', 'UserController');

	// Authentication routes...
        Route::get('loginadmin', function () {
            return redirect('auth/login');
        });        
        Route::get('auth/login', 'Auth\AuthController@getLogin');
	Route::post('auth/login', 'Auth\AuthController@postLogin');
	Route::get('auth/logout', 'Auth\AuthController@getLogout');
	Route::get('auth/confirm/{token}', 'Auth\AuthController@getConfirm');

	// Resend routes...
	Route::get('auth/resend', 'Auth\AuthController@getResend');

	// Registration routes...
	Route::get('auth/register', 'Auth\AuthController@getRegister');
	Route::post('auth/register', 'Auth\AuthController@postRegister');

	// Password reset link request routes...
	Route::get('password/email', 'Auth\PasswordController@getEmail');
	Route::post('password/email', 'Auth\PasswordController@postEmail');

	// Password reset routes...
	Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
	Route::post('password/reset', 'Auth\PasswordController@postReset');
        /////////////////////////////////////////////////////////////////////////
        Route::get('admin/home', 'AdminController@ViewAdmin')->middleware('admin');
        //////////////////////////////////// Location ////////////////////////////
        Route::get('admin/location/add', 'LocationController@FormAdd')->middleware('admin');
        Route::get('admin/location', 'LocationController@getData')->middleware('admin');
        Route::post('admin/location/insert', 'LocationController@addData')->middleware('admin');
        Route::get('admin/location/{id}', 'LocationController@getEdit')->middleware('admin');
        Route::get('admin/location/delete/{id}', 'LocationController@getDelete')->middleware('admin');
        Route::post('admin/location/update/{id}', 'LocationController@updateData')->middleware('admin');
        /////////////////////////////////// Category////////////////////////////
        Route::get('admin/category/add', 'MenuController@FormCategory')->middleware('admin');
        Route::get('admin/category', 'MenuController@getCategory')->middleware('admin');
        Route::post('admin/category/insert', 'MenuController@addCategory')->middleware('admin');
        Route::get('admin/category/{menu_id}', 'MenuController@getEdit')->middleware('admin');
        Route::get('admin/category/delete/{menu_id}', 'MenuController@getDelete')->middleware('admin');
        Route::post('admin/category/update/{menu_id}', 'MenuController@updateData')->middleware('admin');
         /////////////////////////////////// Category Article ////////////////////////////
        Route::get('admin/cat/add', 'MenuController@FormCat')->middleware('admin');
        Route::get('admin/cat', 'MenuController@getCat')->middleware('admin');
        Route::post('admin/cat/insert', 'MenuController@addCat')->middleware('admin');
        Route::get('admin/cat/{cat_id}', 'MenuController@getEditCat')->middleware('admin');
        Route::get('admin/cat/delete/{cat_id}', 'MenuController@getDeleteCat')->middleware('admin');
        Route::post('admin/cat/update/{menu_id}', 'MenuController@updateDataCat')->middleware('admin');
        /////////////////////////////////// Category Tab////////////////////////////
        
        Route::post('admin/category/inserttab', 'MenuController@InsertCategorytab')->middleware('admin');
        
        //////////////////////////////////// User ////////////////////////////
        Route::get('admin/user/add', 'AdminController@FormAdd')->middleware('admin');
        Route::get('admin/user', 'AdminController@getData')->middleware('admin');
        Route::post('admin/user/insert', 'AdminController@addData')->middleware('admin');
        Route::get('admin/user/{id}', 'AdminController@getEdit')->middleware('admin');
        Route::get('admin/user/delete/{id}', 'AdminController@getDelete')->middleware('admin');
        Route::post('admin/user/update/{id}', 'AdminController@updateData')->middleware('admin');
        //////////////////////////////////// Product ////////////////////////////
        Route::get('admin/product/add', 'ProductController@FormProduct')->middleware('admin');
        Route::get('admin/product', 'ProductController@GetProduct')->middleware('admin');
        Route::post('admin/product/insert', 'ProductController@addProduct')->middleware('admin');
        Route::get('admin/product/{menu_id}', 'ProductController@getEdit')->middleware('admin');
        Route::get('admin/product/delete/{menu_id}', 'ProductController@getDelete')->middleware('admin');
        Route::post('admin/product/update/{menu_id}', 'ProductController@updateData')->middleware('admin');
         //////////////////////////////////// Brand ////////////////////////////
        Route::get('admin/brand/add', 'BrandController@FormAdd')->middleware('admin');
        Route::get('admin/brand', 'BrandController@getData')->middleware('admin');
        Route::post('admin/brand/insert', 'BrandController@addData')->middleware('admin');
        Route::get('admin/brand/{id}', 'BrandController@getEdit')->middleware('admin');
        Route::get('admin/brand/delete/{id}', 'BrandController@getDelete')->middleware('admin');
        Route::post('admin/brand/update/{id}', 'BrandController@updateData')->middleware('admin');
         //////////////////////////////////// Currency ////////////////////////////
        Route::get('admin/currency/add', 'CurrencyController@FormAdd')->middleware('admin');
        Route::get('admin/currency', 'CurrencyController@getData')->middleware('admin');
        Route::post('admin/currency/insert', 'CurrencyController@addData')->middleware('admin');
        Route::get('admin/currency/{id}', 'CurrencyController@getEdit')->middleware('admin');
        Route::get('admin/currency/delete/{id}', 'CurrencyController@getDelete')->middleware('admin');
        Route::post('admin/currency/update/{id}', 'CurrencyController@updateData')->middleware('admin');
        //////////////////////////////////// Article ////////////////////////////
        Route::get('admin/article/add', 'ArticleController@FormArticle')->middleware('admin');
        Route::get('admin/article', 'ArticleController@GetArticle')->middleware('admin');
        Route::post('admin/article/insert', 'ArticleController@addArticle')->middleware('admin');
        Route::get('admin/article/{menu_id}', 'ArticleController@getEdit')->middleware('admin');
        Route::get('admin/article/delete/{menu_id}', 'ArticleController@getDelete')->middleware('admin');
        Route::post('admin/article/update/{menu_id}', 'ArticleController@updateData')->middleware('admin');
		//////////////////////////////////// Image Product ////////////////////////////
        Route::get('admin/imageproduct/add', 'ImageProductController@FormAdd')->middleware('admin');
        Route::get('admin/imageproduct', 'ImageProductController@getData')->middleware('admin');
        Route::post('admin/imageproduct/insert', 'ImageProductController@addData')->middleware('admin');
        Route::get('admin/imageproduct/{id}', 'ImageProductController@getEdit')->middleware('admin');
        Route::get('admin/imageproduct/delete/{id}', 'ImageProductController@getDelete')->middleware('admin');
        Route::post('admin/imageproduct/update/{id}', 'ImageProductController@updateData')->middleware('admin');
});
