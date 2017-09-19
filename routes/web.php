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

/*Route::get('/', function () {
    return view('welcome');
});*/





Route::group(['middleware'=> ['web']], function(){

Route::resource('categories', 'CategoryController', ['except'=>['create']]);
Route::resource('tags', 'TagController', ['except'=>['create']]);

Route::post('comments/{post_id}', ['uses'=>'CommentsController@store', 'as'=>'comments.store']);
Route::get('comments/{id}/edit', ['uses'=>'CommentsController@edit', 'as'=>'comments.edit']);
Route::put('comments/{id}/', ['uses'=>'CommentsController@update', 'as'=>'comments.update']);
Route::delete('comments/{id}', ['uses'=>'CommentsController@destroy', 'as'=>'comments.destroy']);
Route::get('comments/{id}/delete', ['uses'=>'CommentsController@delete', 'as'=>'comments.delete']);

Route::get('blog/{slug}', ['as' => 'blog.single' , 'uses'=>'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
Route::get('blog', ['uses'=>'BlogController@getIndex', 'as'=> 'blog.index']);

Auth::routes();

Route::get('/', 'PagesController@index')->name('welcome');

Route::get('blog' , 'PagesController@blog')->name('blog');

Route::get('vission' , 'PagesController@vission')->name('vission');

Route::get('contact' , 'PagesController@getContact')->name('contact');
Route::post('contact' , 'PagesController@postContact')->name('contact');

Route::get('team' , 'PagesController@getTeam')->name('team');


Route::get('details' , 'PagesController@blogDetail')->name('detail');

Route::get('tutorial', 'PagesController@tutorial')->name('tutorial');

Route::resource('posts', 'PostController');



});