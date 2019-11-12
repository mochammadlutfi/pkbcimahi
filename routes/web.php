<?php


/* --------------------- Common/User Routes START -------------------------------- */

// Route::get('/', function () {
//     // return view('welcome');
// });

// Auth::routes([ 'verify' => true ]);

Route::get('/', 'HomeController@beranda')->name('Beranda');
// Route::get('/galeri', 'HomeController@galeri')->name('galeri');
Route::get('/detail_galeri', 'HomeController@detail_galeri')->name('detail_galeri');
Route::get('/forum', 'HomeController@forum')->name('forum');
Route::get('/detail_forum', 'HomeController@detail_forum')->name('detail_forum');
Route::get('/pertanyaan', 'HomeController@pertanyaan')->name('pertanyaan');
// Route::get('/event', 'HomeController@event')->name('event');
// Route::get('/event_detail', 'HomeController@event_detail')->name('event_detail');

Route::group(['prefix' => 'event'], function(){
    Route::get('/', 'EventController@index')->name('event');
    Route::get('/{slug}', 'EventController@detail')->name('event.detail');
});

Route::group(['prefix' => 'galeri'], function(){
    Route::get('/', 'GaleriController@index')->name('galeri');
    Route::get('/{slug}', 'GaleriController@detail')->name('galeri.detail');
});

Route::get('/sejarah', 'TentangpkbController@sejarah')->name('Sejarah Pendirian PKB');
Route::get('/NaskahDeklarasi', 'TentangpkbController@NaskahDeklarasi')->name('NaskahDeklarasi');
Route::get('/ADARTPKB2014', 'TentangpkbController@ADARTPKB2014')->name('ADARTPKB2014');
Route::get('/MaknaLogoPKB', 'TentangpkbController@MaknaLogoPKB')->name('MaknaLogoPKB');
Route::get('/VisidanMisi', 'TentangpkbController@VisidanMisi')->name('VisidanMisi');
Route::get('/MabdaSiyasi', 'TentangpkbController@MabdaSiyasi')->name('MabdaSiyasi');

Route::get('/login', 'LoginController@index')->name('Login');

/* --------------------- Common/User Routes END -------------------------------- */

/* ----------------------- Admin Routes START -------------------------------- */

// Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function(){

//     /**
//      * Admin Auth Route(s)
//      */
    Route::namespace('Auth')->group(function(){

        //Login Routes
        Route::get('/login','LoginController@showLoginForm')->name('login');
        Route::post('/login','LoginController@login');
        Route::post('/logout','LoginController@logout')->name('logout');

        //Register Routes
        Route::get('/register','RegisterController@showRegistrationForm')->name('register');
        Route::post('/register','RegisterController@register');

        //Forgot Password Routes
        Route::get('/password/reset','ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('/password/email','ForgotPasswordController@sendResetLinkEmail')->name('password.email');

        //Reset Password Routes
        Route::get('/password/reset/{token}','ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('/password/reset','ResetPasswordController@reset')->name('password.update');

        // Email Verification Route(s)
        Route::get('email/verify','VerificationController@show')->name('verification.notice');
        Route::get('email/verify/{id}','VerificationController@verify')->name('verification.verify');
        Route::get('email/resend','VerificationController@resend')->name('verification.resend');

    });

//     Route::get('/dashboard','HomeController@index')->name('home')->middleware('guard.verified:admin,admin.verification.notice');

//     //Put all of your admin routes here...

// });

/* ----------------------- Admin Routes END -------------------------------- */
