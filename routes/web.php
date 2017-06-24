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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('admin.dashboard');
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
    Route::get('/member/{id}/edit','MemberController@edit')->name('admin_member_edit');;
    Route::post('member/update','MemberController@update')->name('admin_member_update');;

// category
    Route::get('/category','CategoryController@index')->name('admin_category');
    Route::get('/category/add','CategoryController@create')->name('admin_category_add');
    Route::post('/category/store','CategoryController@store')->name('admin_category_store');
    Route::get('/category/{id}/delete','CategoryController@delete')->name('admin_category_delete');;
    Route::get('/category/{id}/edit','CategoryController@edit')->name('admin_category_edit');;
    Route::post('category/update','CategoryController@update')->name('admin_category_update');;

});





Route::get('downloads/{cat}/{file_name}', function($cat=null,$file_name = null)
{
    $path = public_path('uploads/'.$cat.'/'.$file_name);
  //  dd($path);

    if (file_exists($path)) {

        return Response::download($path);
    }

});

