<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('pages/{id}','PagesController@show');

Route::get('articles/{id}','ArticlesController@show');

Route::get('/', 'HomeController@index');

Route::get('auth/login','Auth\AuthController@getLogin');
Route::post('auth/login','Auth\AuthController@postLogin');
Route::get('auth/logout','Auth\AuthController@getLogout');

Route::post('comment/store','CommentsController@store');
Route::post('article_comment/store','Article_CommentsController@store');

Route::get('/shuo','shuoController@index');
Route::get('/riji','rijiController@index');
Route::get('/guestbook','guestbookController@index');

Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>'auth'],function()
{
    Route::get('/','AdminHomeController@index');
    Route::resource('pages','PagesController');
    Route::resource('articles','ArticlesController');
    Route::resource('comments','commentsController');
    Route::resource('articles_comments','Articles_CommentsController');
});