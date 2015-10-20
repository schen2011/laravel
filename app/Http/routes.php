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

Route::get('/', function () {
    return view('welcome');
});

Route::model('tasks', 'Task');
Route::model('projects', 'Project');

Route::resource('projects', 'ProjectsController');
Route::resource('projects.tasks', 'TasksController');

Route::bind('tasks', function($value, $route) {
	return App\Task::whereSlug($value)->first();
});
Route::bind('projects', function($value, $route) {
	return App\Project::whereSlug($value)->first();
});

Route::model('articles', 'Article');
Route::resource('articles', 'ArticlesController');
Route::bind('articles', function($value, $route) {
	return App\Article::whereSlug($value)->first();
});

Route::model('userkeys', 'UserKey');
Route::resource('userkeys', 'UserKeyController');
Route::bind('userapikeymapping', function($value, $route) {
	return App\UserKey::all();
});

Route:get('display', 'ProjectsController@display');