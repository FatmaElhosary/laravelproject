<?php

/*
 * The attach function only add records to the Pivot table.

The sync function replaces the current records with the new records. This is very useful for updating a model.

Example:

Assuming you have a created Post that has many Tags attached on it where the Tags ID's are [1,2,3].

And the user has the ability to update the Post and its Tags.

The user will send you the new Tags ID's [3,4,5].

If you use the sync function, the new Tags of the Post will be [3,4,5] only.

But if you use the attach function, the new Tags of the Post will be [1,2,3,4,5].
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
//    return view('home');
//});

Route::get('singleArticle', function () {
    return view('singleArticle');
});

Route::get('singlePost', function () {
    return view('singlePost');
});
 Route::get('/','ArticlesController@index');
Auth::routes();
Route::get('articles', 'ArticlesController@index');

Route::get('/home', 'ArticlesController@index');
Route::get('articles/create', 'ArticlesController@create');
Route::get('articles/{id}', 'ArticlesController@show');
Route::post('articles', 'ArticlesController@store');
Route::get('articles/{id}/edit', 'ArticlesController@edit');
Route::get('articles/{id}/destroy', 'ArticlesController@destroy');
Route::post('posts/store', 'postController@store');
Route::resource('articles', 'ArticlesController');
Route::resource('posts', 'PostController');
Route::resource('comments', 'commentscontroller');
//Route::post('posts/{id}', 'commentsController@index');
Route::get('posts/{id}/edit', 'postController@update');
Route::post('posts/{id}/edit', 'postController@update');

Route::post('comments/{id}', 'commentscontroller@update');
Route::post('comments/store', 'commentscontroller@store');











