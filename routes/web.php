<?php

use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;

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

Route::get('/', 'MainController@index')->name('home');
Route::get('/features', 'MainController@features')->name('features');
Route::get('/pricing', 'MainController@pricing')->name('pricing');

Route::post('/subscribe-to-updates', 'SubscriberController@subscribe')
    ->name('subscribe')
    ->middleware(ProtectAgainstSpam::class);

Route::get('/subscribed', 'SubscriberController@subscribed')->name('subscribed');

Route::middleware(ProtectAgainstSpam::class)->group(function() {
    Auth::routes(['register' => false]);
});

Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/blog/{article}', 'BlogController@show')->name('blog.article');

// Editor images have to be public in order to display them in the articles
Route::get('/editor-images/{editorImage}', 'EditorImageController@show')->name('editor-images.show');


Route::get('/logout', 'Auth\LoginController@logout');

Route::middleware(['auth'])->group(function() {

    Route::get('/admin', 'AdminController@index')->name('admin');

    Route::post('/editor-images', 'EditorImageController@upload')->name('editor-images.upload');

    Route::namespace('Admin')->name('admin.')->prefix('admin/')->group(function() {

        Route::resource('/subscribers', 'SubscriberController');

        Route::resource('/articles', 'ArticleController');
    });

});
