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

Route::get('login/twitter', 'Auth\LoginController@redirectToProvider')->name('login.twitter');
Route::get('callback/twitter', 'Auth\LoginController@handleProviderCallback');

Route::get('/', function () {
    return view('welcome');
});

Route::get('about-us', function () {
    return view('about-us-view');
})-> name('about-us'); //give name so you could call it in href in views




Route::get('users', 'UserController@index')->name('users');
Route::get('user/{name}', 'UserController@singleuser')->name('user');
Route::get('edit/{id}', 'UserController@editUser')->name('edit-user');


Route::group(['middleware' => ['verify-user']], function() {
	Route::get('contact-us', function () {
	    return view('contact');
	})-> name('contact'); //give name so you could call it in href in views
	Route::post('thank-you', 'ContactController@welcome')->name('thank');
	Route::get('contact-list', 'ContactController@contactList')->name('contact-list');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'post'], function() {
	Route::get('/', 'PostController@index')->name('post.index');
	Route::get('/new', 'PostController@new')->name('post.new');
	Route::post('/store', 'PostController@store')->name('post.store');
	Route::get('/{id}', 'PostController@show')->name('post.show');
	
	Route::post('/{id}/comment', 'PostController@newComment')
			->name('post.comment.store')
			->middleware('auth');

});
