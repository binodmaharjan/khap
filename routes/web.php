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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/test', function () {

 $c=   auth()->user()->unreadNotifications[0]->data['thread']['name'];

 return $c;
 dd($c);
   // return view('admin.dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {

    // reports
    Route::get('/reports','ReportController@index')->name('admin_reports');
    Route::get('/reports/add','ReportController@create')->name('admin_report_add');
    Route::post('/reports/store','ReportController@store')->name('admin_report_store');
    Route::get('/reports/{id}/delete','ReportController@delete')->name('admin_report_delete');
    Route::get('/reports/{id}/edit','ReportController@edit')->name('admin_report_edit');
    Route::post('reports/update','ReportController@update')->name('admin_report_update');

// slider
    Route::get('/slider','SliderController@index')->name('admin_sliders');
    Route::get('/slider/add','SliderController@create')->name('admin_slider_add');
    Route::post('/slider/store','SliderController@store')->name('admin_slider_store');
    Route::get('/slider/{id}/delete','SliderController@delete')->name('admin_slider_delete');
    Route::get('/slider/{id}/edit','SliderController@edit')->name('admin_slider_edit');
    Route::post('slider/update','SliderController@update')->name('admin_slider_update');

// member
    Route::get('/member','MemberController@index')->name('admin_members');
    Route::get('/member/add','MemberController@create')->name('admin_member_add');
    Route::post('/member/store','MemberController@store')->name('admin_member_store');
    Route::get('/member/{id}/delete','MemberController@delete')->name('admin_member_delete');;
    Route::get('/member/{id}/edit','MemberController@edit')->name('admin_member_edit');
    Route::post('member/update','MemberController@update')->name('admin_member_update');

// category
    Route::get('/category','CategoryController@index')->name('admin_category');
    Route::get('/category/add','CategoryController@create')->name('admin_category_add');
    Route::post('/category/store','CategoryController@store')->name('admin_category_store');
    Route::get('/category/{id}/delete','CategoryController@delete')->name('admin_category_delete');;
    Route::get('/category/{id}/edit','CategoryController@edit')->name('admin_category_edit');
    Route::post('category/update','CategoryController@update')->name('admin_category_update');

    // article
    Route::get('/article','ArticleController@index')->name('admin_articles');
    Route::get('/article/add','ArticleController@create')->name('admin_article_add');
    Route::post('/article/store','ArticleController@store')->name('admin_article_store');
    Route::get('/article/{id}/delete','ArticleController@delete')->name('admin_article_delete');;
    Route::get('/article/{id}/edit','ArticleController@edit')->name('admin_article_edit');
    Route::post('article/update','ArticleController@update')->name('admin_article_update');

    // support

    Route::get('/supports','SupportController@index')->name('admin_supports');
    Route::get('/support/{id}/delete','SupportController@delete')->name('admin_support_delete');

});

//user


    Route::get('/','UserController@index')->name('main');
    Route::get('/support','SupportController@create')->name('user_support_create');
    Route::post('/support/store','SupportController@store')->name('user_support_store');







Route::get('downloads/{cat}/{file_name}', function($cat=null,$file_name = null)
{
    $path = public_path('uploads/'.$cat.'/'.$file_name);
  //  dd($path);

    if (file_exists($path)) {

        return Response::download($path);
    }

});

