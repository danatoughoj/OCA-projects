<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::view('/comments', 'Public.comments');

//Homepage route
Route::resource('/', 'HomeServicesController');

// Profile 
Route::resource('/profile', 'ProfileController')->middleware("auth");

// about routes
Route::get('/about', 'AboutController@index');

//contact routes
Route::get('contact', 'ContactController@contact');
Route::post('contact', 'ContactController@store');


//article routes
Route::resource('/articles', 'ArticlesController');
Route::POST('/articles/{id}', 'ArticlesController@comment_store');


// training centers routes
Route::get('/training_centers', 'TrainingCentersController@index');
Route::get('/training_centers/{id}/services', 'TrainingCentersController@show');


// services routes
Route::get('/services', 'ServicesController@index');
Route::get('/service/{id}', 'ServicesController@show');
Route::POST('/service/{id}/book', 'ServicesController@book');

//search route
Route::POST('/services/search', 'ServicesController@search');

//PayPal routes
Route::get('paywithpaypal', array('as' => 'paywithpaypal', 'uses' => 'PaypalController@payWithPaypal'));
Route::post('paypal', array('as' => 'paypal', 'uses' => 'PaypalController@postPaymentWithpaypal'));
Route::get('paypal', array('as' => 'status', 'uses' => 'PaypalController@getPaymentStatus'));


//admin routes
Route::middleware('auth:admin')->prefix('/admin')->name('admin.')->group(function () {
    Route::get('', 'viewController@index')->name('home');
    Route::get('/viewAdmin', 'viewController@admin');

    Route::resource('/manageAdmin', 'manageAdminController');

    Route::get('/viewUser', 'viewController@user');
    Route::resource('/manageUser', 'manageUserController');

    Route::get('/viewCenter', 'viewController@center');
    Route::resource('/manageCenter', 'manageCenterController');

    Route::get('/viewService', 'viewController@service');
    Route::resource('/manageService', 'manageServiceController');

    Route::get('/viewArticle', 'viewController@article');
    Route::resource('/manageArticle', 'manageArticleController');

    Route::resource('/manageContact', 'manageContactController');

    Route::resource('/manageUnansweredFaq', 'manageUnansweredFaqController');
    Route::resource('/manageAnsweredFaq', 'manageAnsweredFaqController');

    //Admin Auth Routes
    Route::namespace('Admin\Auth')->group(function () {
        Route::post('/logout', 'LoginController@logout')->name('logout');
    });
});

//Admin Auth Routes
Route::prefix('/admin')->name('admin.')->group(function () {
    Route::namespace('Admin\Auth')->group(function () {
        //Login Routes
        Route::get('/login', 'LoginController@showLoginForm')->name('login');
        Route::post('/login', 'LoginController@login')->name('log-to-admin');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

