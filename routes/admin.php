<?php
Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function(){
    /**
     * Admin Auth Route(s)
     */
    Route::namespace('Auth')->group(function(){
        Route::get('/','LoginController@showLoginForm');
        Route::get('/login','LoginController@showLoginForm')->name('login');
        Route::post('/login','LoginController@login');
        Route::post('/logout','LoginController@logout')->name('logout');

        //Register Routes
        // Route::get('/register','RegisterController@showRegistrationForm')->name('register');
        // Route::post('/register','RegisterController@register');

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

    Route::get('/beranda','HomeController@index')->name('beranda')->middleware('guard.verified:admin,admin.verification.notice');

    Route::group(['prefix' => 'tanya-jawab'], function(){
        Route::get('/pertanyaan', 'QAController@pertanyaan')->name('QA.pertanyaan');
        Route::get('/dijawab', 'QAController@dijawab')->name('QA.dijawab');
        Route::match(['get', 'post'], '/jawab', 'QAController@jawab')->name('QA.jawab');

        Route::group(['prefix' => 'kategori'], function(){
            Route::get('/', 'QACategoryController@index')->name('QA.kategori');
            Route::post('/simpan','QACategoryController@simpan')->name('QA.kategori_simpan');
            Route::get('/edit/{id}','QACategoryController@edit')->name('QA.kategori_edit');
            Route::post('/update','QACategoryController@update')->name('QA.kategori_update');
            Route::get('/hapus/{id}','QACategoryController@hapus')->name('QA.kategori_hapus');
        });
    });

    Route::group(['prefix' => 'galeri'], function(){
        Route::get('/', 'GaleriController@index')->name('galeri');
        Route::post('/simpan','GaleriController@simpan')->name('galeri.simpan');
        Route::get('/edit/{id}','GaleriController@edit')->name('galeri.edit');
        Route::post('/update','GaleriController@update')->name('galeri.update');
        Route::get('/hapus/{id}','GaleriController@hapus')->name('galeri.hapus');

        Route::group(['prefix' => 'foto'], function(){
            Route::get('/{id}', 'GaleriFotoController@index')->name('galeri.foto');
            Route::get('/{id}/tambah', 'GaleriFotoController@tambah')->name('galeri.foto_tambah');
            Route::post('/simpan','GaleriFotoController@simpan')->name('galeri.foto_simpan');
            Route::get('/edit/{id}','GaleriFotoController@edit')->name('galeri.foto_edit');
            Route::post('/update','GaleriFotoController@update')->name('galeri.foto_update');
            Route::get('/hapus/{id}','GaleriFotoController@hapus')->name('galeri.foto_hapus');
        });
    });

    Route::group(['prefix' => 'event'], function(){
        Route::get('/', 'EventController@index')->name('event');
        Route::get('/tambah', 'EventController@tambah')->name('event.tambah');
        Route::post('/simpan','EventController@simpan')->name('event.simpan');
        Route::get('/edit/{id}','EventController@edit')->name('event.edit');
        Route::post('/update','EventController@update')->name('event.update');
        Route::get('/hapus/{id}','EventController@hapus')->name('event.hapus');
    });
});

