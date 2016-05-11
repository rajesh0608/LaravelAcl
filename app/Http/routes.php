<?php



Route::get('/', function () {
    return view('welcome');
});
Route::get('test','AdminController@Test');

Route::get('signup', 'AdminController@SignUp');   // send for form purpose

Route::post('signMe', 'AdminController@signMe');  // submit form function do here

Route::get('login', 'AdminController@login_form');

Route::post('loginme', 'AdminController@checklogin');

/**
 * For Authenticate Purpose
 */
Route::group(['middleware' => 'auth'], function(){

Route::get('userProfile', 'AdminController@getprofile');
Route::get('logout', 'AdminController@logOut');

Route::get('article', 'AdminController@Artcle');

});









