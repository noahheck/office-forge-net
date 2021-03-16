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
Route::get('/for-business', 'MainController@business')->name('business');
Route::get('/for-it-teams', 'MainController@itTeams')->name('it-teams');
Route::get('/pricing', 'MainController@pricing')->name('pricing');

Route::get('/features', 'MainController@features')->name('features');
Route::get('/features/form-docs', 'FeaturesController@formDocs')->name('features.form-docs');
Route::get('/features/files', 'FeaturesController@files')->name('features.files');
Route::get('/features/filestore', 'FeaturesController@filestore')->name('features.filestore');
Route::get('/features/reports', 'FeaturesController@reports')->name('features.reports');
Route::get('/features/activities', 'FeaturesController@activities')->name('features.activities');


Route::post('/subscribe-to-updates', 'SubscriberController@subscribe')
    ->name('subscribe')
    ->middleware(ProtectAgainstSpam::class);

Route::get('/subscribed', 'SubscriberController@subscribed')
    ->name('subscribed');

Route::middleware('signed')
    ->get('/verify/7ab398ce7f34d9329/{subscriber}', 'SubscriberController@verify')
    ->name('verify_subscriber');

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
        Route::post('/subscribers/{subscriber}/verify', 'SubscriberController@verify')->name('subscribers.verify');

        Route::resource('/articles', 'ArticleController');

        Route::resource('/contacts', 'ContactController');
        Route::post('/contacts/{contact}/unread', 'ContactController@unread')->name('contacts.unread');
        Route::post('/contacts/{contact}/complete', 'ContactController@complete')->name('contacts.complete');
        Route::post('/contacts/{contact}/uncomplete', 'ContactController@uncomplete')->name('contacts.uncomplete');

        Route::post('/contacts/{contact}/notes', 'Contact\NoteController@store')->name('contacts.notes.store');

        Route::resource('/mailings', 'MailingController');
        Route::post('/mailings/{mailing}/send', 'MailingController@send')->name('mailings.send');

    });

});
