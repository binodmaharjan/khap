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

Route::get('/reports','ReportController@index');
Route::get('/reports/add','ReportController@create');
Route::post('/reports/store','ReportController@store')->name('store');
Route::get('/reports/{id}/delete','ReportController@delete');




Route::get('downloads/{cat}/{file_name}', function($cat=null,$file_name = null)
{
    $path = storage_path('app/'.$cat.'/'.$file_name);
  //  dd($path);

    if (file_exists($path)) {

        return Response::download($path);
    }

});

