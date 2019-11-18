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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'OrderController@Order');
Route::post('/subjectArea', 'OrderController@getSubjectArea');
Route::post('/subject', 'OrderController@getSubject');
Route::post('/urgency', 'OrderController@getTime');
Route::post('/education', 'OrderController@getEducation');
Route::post('/stepOne', 'OrderController@stepOne');
Route::post('/price','OrderController@getPrice' );
//Route::get('/folder', 'OrderController@getFolderId');
Route::post('upload', 'OrderController@uploadFile');
//Route::post('/paypal-transaction-complete','PaymentController@getOrder' );
Route::get('/dashboard', 'DashboardController@Dashboard');
Route::post('/payment', 'PaymentController@Payment');
Route::post('/register', 'RegisterController@store');
Route::post('/login','LoginController@login');
//Route::get('/otp', 'LoginController@generateOTP');
Route::post('/otp', 'LoginController@VerifyOtp');
Route::get('/register', 'Register1Controller@register');
Route::get('/login', 'Login1Controller@login');


