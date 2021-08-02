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
//    return view('user.first');
//});

Route::get('/second', function () {
    return view('user.second');
});

Route::get('/test', function () {

    $c = auth()->user()->unreadNotifications[0]->data['thread']['name'];

    return $c;
    dd($c);
    // return view('admin.dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {

    // users
    Route::get('/users', 'EditorController@index')->name('admin_users');
    Route::get('/user/add', 'EditorController@create')->name('admin_user_add');
    Route::post('/user/store', 'EditorController@store')->name('admin_user_store');
    Route::get('/user/{id}/delete', 'EditorController@delete')->name('admin_user_delete');;
    Route::get('/user/{id}/edit', 'EditorController@edit')->name('admin_user_edit');
    Route::post('user/update', 'EditorController@update')->name('admin_user_update');


    // reports
    Route::get('/reports', 'ReportController@index')->name('admin_reports');
    Route::get('/reports/add', 'ReportController@create')->name('admin_report_add');
    Route::post('/reports/store', 'ReportController@store')->name('admin_report_store');
    Route::get('/reports/{id}/delete', 'ReportController@delete')->name('admin_report_delete');
    Route::get('/reports/{id}/edit', 'ReportController@edit')->name('admin_report_edit');
    Route::post('reports/update', 'ReportController@update')->name('admin_report_update');

// slider
    Route::get('/slider', 'SliderController@index')->name('admin_sliders');
    Route::get('/slider/add', 'SliderController@create')->name('admin_slider_add');
    Route::post('/slider/store', 'SliderController@store')->name('admin_slider_store');
    Route::get('/slider/{id}/delete', 'SliderController@delete')->name('admin_slider_delete');
    Route::get('/slider/{id}/edit', 'SliderController@edit')->name('admin_slider_edit');
    Route::post('slider/update', 'SliderController@update')->name('admin_slider_update');

    // gallery
    Route::get('/gallery', 'GalleryController@index')->name('admin_gallery');
    Route::get('/gallery/add', 'GalleryController@create')->name('admin_gallery_add');
    Route::post('/gallery/store', 'GalleryController@store')->name('admin_gallery_store');
    Route::get('/gallery/{id}/delete', 'GalleryController@delete')->name('admin_gallery_delete');
    Route::get('/gallery/{id}/edit', 'GalleryController@edit')->name('admin_gallery_edit');
    Route::post('gallery/update', 'GalleryController@update')->name('admin_gallery_update');


// member
    Route::get('/member', 'MemberController@index')->name('admin_members');
    Route::get('/member/add', 'MemberController@create')->name('admin_member_add');
    Route::post('/member/store', 'MemberController@store')->name('admin_member_store');
    Route::get('/member/{id}/delete', 'MemberController@delete')->name('admin_member_delete');;
    Route::get('/member/{id}/edit', 'MemberController@edit')->name('admin_member_edit');
    Route::post('member/update', 'MemberController@update')->name('admin_member_update');

// category
    Route::get('/category', 'CategoryController@index')->name('admin_category');
    Route::get('/category/add', 'CategoryController@create')->name('admin_category_add');
    Route::post('/category/store', 'CategoryController@store')->name('admin_category_store');
    Route::get('/category/{id}/delete', 'CategoryController@delete')->name('admin_category_delete');;
    Route::get('/category/{id}/edit', 'CategoryController@edit')->name('admin_category_edit');
    Route::post('category/update', 'CategoryController@update')->name('admin_category_update');

    // article
    Route::get('/article', 'ArticleController@index')->name('admin_articles');
    Route::get('/article/add', 'ArticleController@create')->name('admin_article_add');
    Route::post('/article/store', 'ArticleController@store')->name('admin_article_store');
    Route::get('/article/{id}/delete', 'ArticleController@delete')->name('admin_article_delete');;
    Route::get('/article/{id}/edit', 'ArticleController@edit')->name('admin_article_edit');
    Route::post('article/update', 'ArticleController@update')->name('admin_article_update');

    // nav menu
    Route::get('/menu', 'MenuController@index')->name('admin_menu');
    Route::get('/menu/add', 'MenuController@create')->name('admin_menu_add');
    Route::post('/menu/store', 'MenuController@store')->name('admin_menu_store');
    Route::get('/menu/{id}/delete', 'MenuController@delete')->name('admin_menu_delete');;
    Route::get('/menu/{id}/edit', 'MenuController@edit')->name('admin_menu_edit');
    Route::post('menu/update', 'MenuController@update')->name('admin_menu_update');


    // support

    Route::get('/supports', 'SupportController@index')->name('admin_supports');
    Route::get('/support/{id}/delete', 'SupportController@delete')->name('admin_support_delete');
    Route::get('/support/notification', 'SupportController@notificationClicked')->name('admin_notification_clicked');
    Route::get('/support/{folder}/downloads', 'SupportController@download')->name('admin_supports_download');

    //  Route::get('/gallery','SupportController@photos')->name('admin_gallery');


    //gunaso

    Route::get('/gunaso', 'GunasoController@index')->name('admin_gunaso');
//    Route::get('/gunaso/add', 'GunasoController@create')->name('admin_gunaso_add');
   // Route::post('/gunaso/store', 'GunasoController@store')->name('admin_gunaso_store');
    Route::get('/gunaso/{id}/delete', 'GunasoController@delete')->name('admin_gunaso_delete');
    Route::get('/gunaso/{id}/view', 'GunasoController@view')->name('admin_gunaso_view');


     Route::get('/bhatta/add', 'BhattaController@create')->name('admin_vatta_add');
    Route::post('/bhatta/store', 'BhattaController@store')->name('admin_vatta_store');

    // kagajat haru
    // article
    Route::get('/kagajat', 'KagajatController@index')->name('admin_kagajats');
    Route::get('/kagajat/add', 'KagajatController@create')->name('admin_kagajat_add');
    Route::post('/kagajat/store', 'KagajatController@store')->name('admin_kagajat_store');
    Route::get('/kagajat/{id}/delete', 'KagajatController@delete')->name('admin_kagajat_delete');;
    Route::get('/kagajat/{id}/edit', 'KagajatController@edit')->name('admin_kagajat_edit');
    Route::post('kagajat/update', 'KagajatController@update')->name('admin_kagajat_update');

    // person
    Route::get('/person', 'PersonController@index')->name('admin.persons');
    Route::get('/person/add', 'PersonController@create')->name('admin.persons.add');
    Route::get('/person/{id}/show', 'PersonController@show')->name('admin.persons.show');
    Route::post('/person/store', 'PersonController@store')->name('admin.persons.store');
    Route::get('/person/{id}/delete', 'PersonController@destroy')->name('admin.persons.delete');;
    Route::get('/person/{id}/edit', 'PersonController@edit')->name('admin.persons.edit');
    Route::post('person/update', 'PersonController@update')->name('admin.persons.update');
    Route::get('/person/{id}/addFamily', 'PersonController@AddFamily')->name('admin.persons.add.family');
    Route::post('/person/{id}/storeFamily', 'PersonController@StoreFamily')->name('admin.persons.store.family');


});

//user

  // Route::get('/main','UserController@index')->name('main');
Route::get('/', 'UserController@index')->name('main');
Route::get('/gallery', 'UserController@photos')->name('gallery');
Route::get('/staffs', 'UserController@staffDetails')->name('staffs');
Route::get('/news', 'UserController@category')->name('news');
Route::get('/nibedan', 'SupportController@create')->name('user_support_create');
Route::post('/support/store', 'SupportController@store')->name('user_support_store');
Route::get('/article/{id}/post', 'UserController@post')->name('article_post');

Route::get('/gunaso', 'GunasoController@gunaso')->name('gunaso');
Route::post('/gunaso/store', 'GunasoController@store')->name('gunaso_store');
Route::get('/downloads','UserController@download')->name('downloads');
Route::get('/bhatta','UserController@bhatta')->name('brida_bhatta');
Route::get('/bhatta/search','UserController@bhattaSearch')->name('bhatta_search');
Route::get('/downloads/search','UserController@downloadSearch')->name('downloads_search');
Route::get('/persons','UserController@person')->name('persons');
Route::get('/persons/{id}/details','UserController@person_details')->name('persons.details');


//terminal
//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Routes cached</h1>';
});
//Clear Cache facade value:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});






Route::get('storage/{cat}/{filename}', function ($cat,$filename)
{
    $path = storage_path('uploads/' . $cat . '/' . $filename);

   // dd($path);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});


Route::get('downloads/{cat}/{file_name}', function ($cat = null, $file_name = null) {
    $path = storage_path('uploads/' . $cat . '/' . $file_name);


    if (file_exists($path)) {

        return Response::download($path);
    }

});

Route::get('/{slug}', 'UserController@slug')->name('article_slug');

