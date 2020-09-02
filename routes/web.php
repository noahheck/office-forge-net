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

Route::get('/logout', 'Auth\LoginController@logout');

Route::middleware(['auth'])->group(function() {

    Route::get('/admin', 'AdminController@index')->name('admin');

    Route::namespace('Admin')->name('admin.')->group(function() {

        Route::resource('/subscribers', 'SubscriberController');
    });

});
