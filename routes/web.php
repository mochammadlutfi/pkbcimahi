<?php


/* --------------------- Common/User Routes START -------------------------------- */

// Route::get('/', function () {
//     // return view('welcome');
// });

// Auth::routes([ 'verify' => true ]);
Route::namespace('User')->group(function(){
	Route::get('/', 'HomeController@beranda')->name('Beranda');

	Route::get('/QnA', 'QnAController@index')->name('QnA');
	Route::get('/QnA_detail', 'QnAController@detail')->name('QnA.Detail');
	Route::get('/QnA_pertanyaan', 'QnAController@pertanyaan')->name('QnA.Pertanyaan');
	Route::get('/QnA_cari', 'QnAController@cari')->name('QnA.Cari');


	Route::get('/event', 'EventController@index')->name('Event');
	Route::get('/event_detail', 'EventController@detail')->name('Event.Detail');

	Route::get('/galeri', 'GaleriController@index')->name('Galeri');
	Route::get('/galeri/detail', 'GaleriController@detail')->name('Galeri.Detail');

	Route::get('/sejarah', 'TentangpkbController@sejarah')->name('Sejarah Pendirian PKB');
	Route::get('/NaskahDeklarasi', 'TentangpkbController@NaskahDeklarasi')->name('NaskahDeklarasi');
	Route::get('/ADARTPKB2014', 'TentangpkbController@ADARTPKB2014')->name('ADARTPKB2014');
	Route::get('/MaknaLogoPKB', 'TentangpkbController@MaknaLogoPKB')->name('MaknaLogoPKB');
	Route::get('/VisidanMisi', 'TentangpkbController@VisidanMisi')->name('VisidanMisi');
	Route::get('/MabdaSiyasi', 'TentangpkbController@MabdaSiyasi')->name('MabdaSiyasi');

	Route::get('/login', 'AuthController@login')->name('Login');
	Route::get('/daftar', 'AuthController@daftar')->name('Daftar');
	Route::get('/lupa', 'AuthController@lupa')->name('Forgot');
	Route::get('/verifikasi', 'AuthController@verifikasi')->name('Verifikasi');
});

/* --------------------- Common/User Routes END -------------------------------- */

/* ----------------------- Admin Routes START -------------------------------- */

// Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function(){

//     /**
//      * Admin Auth Route(s)
//      */
//     Route::namespace('Auth')->group(function(){

//         //Login Routes
//         Route::get('/login','LoginController@showLoginForm')->name('login');
//         Route::post('/login','LoginController@login');
//         Route::post('/logout','LoginController@logout')->name('logout');

//         //Register Routes
//         // Route::get('/register','RegisterController@showRegistrationForm')->name('register');
//         // Route::post('/register','RegisterController@register');

//         //Forgot Password Routes
//         Route::get('/password/reset','ForgotPasswordController@showLinkRequestForm')->name('password.request');
//         Route::post('/password/email','ForgotPasswordController@sendResetLinkEmail')->name('password.email');

//         //Reset Password Routes
//         Route::get('/password/reset/{token}','ResetPasswordController@showResetForm')->name('password.reset');
//         Route::post('/password/reset','ResetPasswordController@reset')->name('password.update');

//         // Email Verification Route(s)
//         Route::get('email/verify','VerificationController@show')->name('verification.notice');
//         Route::get('email/verify/{id}','VerificationController@verify')->name('verification.verify');
//         Route::get('email/resend','VerificationController@resend')->name('verification.resend');

//     });

//     Route::get('/dashboard','HomeController@index')->name('home')->middleware('guard.verified:admin,admin.verification.notice');

//     //Put all of your admin routes here...

// });

/* ----------------------- Admin Routes END -------------------------------- */
