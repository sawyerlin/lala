<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::bind('songs', function($slug) {
  return App\Song::whereSlug($slug)->first();
});


$router->resource('songs', 'SongsController', [
  'names' => [
    'index' => 'allSongs',
    'show' => 'oneSong',
    'edit' => 'editSong',
    'update' => 'updateSong',
    'create' => 'createSong',
    'store' => 'storeSong',
    'destroy' => 'deleteSong'
  ],
  'only' => [
    'index', 'show', 'edit', 'update', 'create', 'store', 'destroy'
  ]
]);

/*
|--------------------------------------------------------------------------
| Authentication & Password Reset Controllers
|--------------------------------------------------------------------------
|
| These two controllers handle the authentication of the users of your
| application, as well as the functions necessary for resetting the
| passwords for your users. You may modify or remove these files.
|
*/

/*$router->controller('auth', 'AuthController');*/

/*$router->controller('password', 'PasswordController');*/
