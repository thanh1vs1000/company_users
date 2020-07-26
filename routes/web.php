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


Route::get('/','HomeController@index' );
Route::get('/index','HomeController@index');

//Route::group(['prefix' => 'users' ],function(){
//    Route::get('/signin-users','UserController@signin_user');
//
//
//
//});
//login users//
Route::get('/signin-user','UserController@getSignin')->name('signin-user');
Route::post('/login-user','UserController@postSignin')->name('login-user');
Route::get('/logout','UserController@LogoutUser')->name('logout');

Route::get('/add-signup','UserController@add_signup')->name('add-signup');
Route::post('/save-signup','UserController@save_user')->name('save-signup');
//end user//

//Employer
Route::get('/signin-employer','CompanyUserController@getSigninEmployer')->name('signin-employer');
Route::post('/login-employer','CompanyUserController@postSigninEmployer')->name('login-employer');
Route::get('/employer','CompanyUserController@getEmployer')->name('employer');
Route::get('/logout-employer','CompanyUserController@LogoutEmployer')->name('logout-employer');

Route::get('/add-employer','CompanyUserController@add_employer')->name('add-employer');
Route::post('/save-employer','CompanyUserController@save_employer')->name('save-employer');
//end company//


        //FRONTEND//
Route::group(['prefix'=> 'company'],function (){
    Route::get('/','CompanyController@index')->name('company.get.index');
    Route::get('/edit-profile-company/{id}','CompanyController@getEditProfile')->name('company.get.editprofile');
    Route::post('/edit-profile-company/{id}','CompanyController@postEditProfile')->name('company.post.editprofile');

    //job//
    Route::group(['prefix'=> 'job'],function (){
        Route::get('/','CompanyController@getJob')->name('job.get.list');

        Route::get('/add-job','CompanyController@getAddJob')->name('job.get.add');
        Route::post('/add-job','CompanyController@postAddJob')->name('job.post.add');

        Route::get('/edit-job/{id}','CompanyController@getEditJob')->name('job.get.edit');
        Route::post('/edit-job/{id}','CompanyController@postEditJob')->name('job.post.edit');

        Route::get('/delete-job/{id}','CompanyController@getDeleteJob')->name('job.get.delete');
    });
});
