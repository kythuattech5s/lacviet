<?php

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

Route::get('/clear', function () {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    echo '<pre>';
    var_dump(__LINE__);
    die();
    echo '</pre>';
});
Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['web', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
    'namespace' => 'App\Http\Controllers'
], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('cronimg', array('uses' => 'CronImgController@convertImg'));
    Route::get('cronmail', array('uses' => 'CronMailController@cronmail'));
    Route::get('auto-deactive-banner', array('uses' => 'StaticController@autoDeactiveBanner'));
    Route::post('dang-ky-thong-tin', 'RegisterInfoController@register');
    Route::match(['get', 'post'], '/{link}', array('uses' => 'HomeController@direction'))->where('link', '^((?!esystem)[0-9a-zA-Z\?\.\-/])*$');
});
