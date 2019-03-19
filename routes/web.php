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

// Route::get('/', function () {
//     return view('welcome');
// });



/* GET REQUESTS */

Route::get('/', 'MainController@getLogin');
Route::get('/project-finish', 'MainController@getProjectFinish');
Route::get('/dashboard', 'MainController@getDashboard');
Route::get('/projects', 'MainController@getProjects');
Route::get('/preview', 'PreviewController@getPreview');



/* POST REQUESTS */

Route::post('/', 'MainController@postLogin');
Route::post('/logout', 'MainController@postLogout');
Route::post('/change-language', 'MainController@changeLanguage');



/* HTTP ERRORS */

Route::get('404', ['as' => '404', 'uses' => 'HttpErrorController@notfound']);
Route::get('500', ['as' => '500', 'uses' => 'HttpErrorController@internalError']);
