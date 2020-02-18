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
View::share('admin_assets', asset('public/admin'));
Route::get('/', function () {
    echo exec('php artisan clear:cache');
    return view('welcome');
});


Route::prefix('admin')->group(function () {
    Route::get('login', 'AdminController@index')->name('admin');
    Route::post('login', 'AdminController@login')->name('login');
    Route::group(['middleware' => ['UserAuth']], function () {
        Route::get('dashboard', 'AdminController@dashboard');
        Route::get('ad-user', 'AdminController@ad_user')->name('ad-user');
        Route::post('post-user', 'AdminController@post_user')->name('post-user');
        Route::get('view-all-user', 'AdminController@view_all_user')->name('view-all-user');
        Route::get('logout', 'AdminController@logout')->name('logout');
        Route::get('delete-user/{id}', 'AdminController@delete_user')->name('delete-user');
    });
});
