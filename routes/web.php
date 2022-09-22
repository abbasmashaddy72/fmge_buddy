<?php

use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => 'guest', 'namespace' => 'App\Http\Controllers\Frontend'], function () {
    Route::get('', 'HomeController@index')->name('home');
    Route::get('blogs', 'HomeController@blogs')->name('blogs');
    Route::get('blog_detail', 'HomeController@blog_detail')->name('blog_detail');
    Route::get('courses', 'HomeController@courses')->name('courses');
    Route::get('course_detail', 'HomeController@course_detail')->name('course_detail');
    Route::get('contact_us', 'HomeController@contact_us')->name('contact_us');
    Route::get('faqs', 'HomeController@faqs')->name('faqs');
    Route::get('about_us', 'HomeController@about_us')->name('about_us');
    Route::get('gallery', 'HomeController@gallery')->name('gallery');
});

// 'index', 'create', 'store', 'show', 'edit', 'update', 'destroy'

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth', 'namespace' => 'App\Http\Controllers\Backend'], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    Route::get('user/permissions/{id}', 'UserController@permission_edit')->name('user.permissions.edit');

    Route::post('user/permissions/{id}', 'UserController@permission_save')->name('user.permissions.save');

    Route::resource('user', 'UserController')->only([
        'index', 'create', 'store',  'edit', 'show'
    ]);

    Route::get('homepage', 'HomePageController@index')->name('homepage');

    Route::resource('contact-us', 'ContactUsController')->only([
        'index', 'show'
    ]);

    Route::get('about-us', 'AboutUsController@index')->name('aboutUs');

    Route::resource('faq', 'FaqController')->only([
        'index', 'create', 'store',  'edit'
    ]);

    Route::resource('review', 'ReviewController')->only([
        'index', 'create', 'store',  'edit'
    ]);

    Route::resource('team', 'TeamController')->only([
        'index', 'create', 'store',  'edit'
    ]);

    Route::post('image_upload', 'MiscellaneousController@image_upload')->name('ckeditor.upload');

    Route::resource('blog', 'BlogController')->only([
        'index', 'create', 'store',  'edit'
    ]);

    Route::resource('feature', 'FeatureController')->only([
        'index', 'create', 'store',  'edit'
    ]);

    Route::group(['prefix' => 'laravel-filemanager', 'middleware' => 'auth'], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });
});

require __DIR__ . '/auth.php';
