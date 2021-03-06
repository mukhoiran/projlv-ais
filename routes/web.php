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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// ============== Testing Route =============================
Route::get('/admin', function(){
  echo "Admin page";
})->middleware('checkAdmin');

Route::get('/template', array('as' => 'admin', 'uses' => 'AdminController@index'));

// Route as admin
Route::group(['middleware' => ['web','checkLevel:1']], function()
{
  Route::get('/trymiddleware', function(){
    return 'Hallo .. how are you?';
  });
});
