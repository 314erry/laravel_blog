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

use App\Http\Controllers\PagesController;
use Illuminate\Foundation\Testing\Constraints\PageConstraint;

Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@GetSingle'])->where('slug', '[\w\d\-\_]+');
Route::get('blog', ['as' => 'blog.index', 'uses' => 'BlogController@GetIndex']);
Route::get('contact', 'PagesController@GetContact');
Route::get('about', 'PagesController@GetAbout');
Route::get('/', 'PagesController@GetIndex');
Route::resource('posts', 'PostController');
