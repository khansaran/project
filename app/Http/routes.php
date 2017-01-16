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
      
         /////////////////////////////////// Category  ////////////////////////////
        Route::get('admin/cat/add', 'MenuController@FormCat')->middleware('admin');
        Route::get('admin/cat', 'MenuController@getCat')->middleware('admin');
        Route::post('admin/cat/insert', 'MenuController@addCat')->middleware('admin');
        Route::get('admin/cat/{cat_id}', 'MenuController@getEditCat')->middleware('admin');
        Route::get('admin/cat/delete/{cat_id}', 'MenuController@getDeleteCat')->middleware('admin');
        Route::post('admin/cat/update/{menu_id}', 'MenuController@updateDataCat')->middleware('admin');
      
        //////////////////////////////////// User ////////////////////////////
        Route::get('admin/user/add', 'AdminController@FormAdd')->middleware('admin');
        Route::get('admin/user', 'AdminController@getData')->middleware('admin');
        Route::post('admin/user/insert', 'AdminController@addData')->middleware('admin');
        Route::get('admin/user/{id}', 'AdminController@getEdit')->middleware('admin');
        Route::get('admin/user/delete/{id}', 'AdminController@getDelete')->middleware('admin');
        Route::post('admin/user/update/{id}', 'AdminController@updateData')->middleware('admin');
        
         //////////////////////////////////// Brand ////////////////////////////
        Route::get('admin/brand/add', 'BrandController@FormAdd')->middleware('admin');
        Route::get('admin/brand', 'BrandController@getData')->middleware('admin');
        Route::post('admin/brand/insert', 'BrandController@addData')->middleware('admin');
        Route::get('admin/brand/{id}', 'BrandController@getEdit')->middleware('admin');
        Route::get('admin/brand/delete/{id}', 'BrandController@getDelete')->middleware('admin');
        Route::post('admin/brand/update/{id}', 'BrandController@updateData')->middleware('admin');
        
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
		//////////////////////////////////// Isert Category ////////////////////////////
		Route::post('admin/imageproduct/insertcat', 'ImageProductController@InsertCategory')->middleware('admin');
		Route::post('admin/imageproduct/insertbrand', 'ImageProductController@InsertBrand')->middleware('admin');
		Route::post('admin/imageproduct/inserttag', 'ImageProductController@insertTag')->middleware('admin');
		Route::post('admin/imageproduct/delectimagepros', 'ImageProductController@DelectImagePro')->middleware('admin');
		Route::post('admin/imageproduct/delectimagemulti', 'ImageProductController@DelectMulti')->middleware('admin');
		/* Route::post('admin/imageproduct/delectimagepros/{id}', function ($id) {
			return 1;
			DB::table('table_image_products')->where('id', $id)->update(['image' => ""]);
			
        });  */
		/*Route::get('admin/imageproduct/delectimagmulti/{id}', function ($id) {
           DB::table('table_images')->where('id', $id)->delete();
			//return response()->json(['id'=>$id
			return back()->with('message','លុបបានជោកជ័យ !');
        }); */
});
