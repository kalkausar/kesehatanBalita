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

Route::get('/', 'FrontendController@index');
Route::get('/informasi', 'FrontendController@informasi');
Route::get('/informasiDetail/{id}/{slug}', 'FrontendController@informasiDetail');
Route::get('/dataKota', 'FrontendController@dataKota');
Route::get('/cariKabupaten','FrontendController@cariKabupaten');
Route::get('/grafik', 'FrontendController@chart');
Route::get('/dataGrafik', 'FrontendController@dataChart');
Route::get('/tentangKami', 'FrontendController@tentangKami');

//admin
Route::get('/dashAdmin', 'ManageAdminController@index');
//news
Route::get('/news', 'ManageAdminController@news');
Route::get('/addNews', 'ManageAdminController@addNews');
Route::post('/postNews', 'ManageAdminController@postNews');
Route::get('/editNews/{id}', 'ManageAdminController@editNews');
Route::put('/editNews/{id}/edit','ManageAdminController@updateNews');
Route::post('/deleteNews/{id}', 'ManageAdminController@deleteNews');
//Data
Route::get('/data', 'ManageAdminController@data');
Route::get('/addData', 'ManageAdminController@addData');
Route::post('/postIterasi', 'ManageAdminController@postIterasi');
Route::post('/postTahun', 'ManageAdminController@postTahun');
Route::post('/postData', 'ManageAdminController@postData');
Route::get('/editData/{id}', 'ManageAdminController@editData');
Route::post('/updateData/{id}', 'ManageAdminController@updateData');
Route::post('/deleteData/{id}', 'ManageAdminController@deleteData');
//Cluster
Route::get('/cluster', 'ManageAdminController@cluster');
Route::post('/postCluster','ManageAdminController@postCluster');
//dataMentah
Route::get('/dataMentah', 'ManageAdminController@dataMentah');
Route::get('/addDataMentah', 'ManageAdminController@addDataMentah');
Route::post('/postKabupaten', 'ManageAdminController@postKabupaten');
Route::post('/postDataMentah', 'ManageAdminController@postDataMentah');
Route::get('/editDataMentah/{id}', 'ManageAdminController@editDataMentah');
Route::post('/updateDataMentah/{id}', 'ManageAdminController@updateDataMentah');
Route::post('/deleteDataMentah/{id}', 'ManageAdminController@deleteDataMentah');
//User
Route::get('/user','ManageAdminController@user');
Route::put('/updateUser/{id}','ManageAdminController@updateUser');

// Authentication routes...
Route::get('/admin',['as' => '/admin','uses'=>'LoginController@index']);
Route::get('error', ['as'=> 'error','uses'=>'ManageFrontendController@error']);
Route::get('dashboard', 'AuthController@getRoot');
Route::post('admin/postLogin', 'LoginController@postLogin');
Route::get('logout', 'LoginController@logout');
