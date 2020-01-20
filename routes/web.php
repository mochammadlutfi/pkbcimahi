<?php
use App\Admin;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

/* --------------------- Common/User Routes START -------------------------------- */

Route::get('/coba', function () {
    // return view('welcome');
    // $client = new Client();
    // $req = $client->get('https://blog.pkbcimahi.or.id/wp-json/wp/v2/posts?per_page=6');

    // $res = $req->getBody()->getContents();

    // dd($res);
    // $a1 = Role::create(['guard_name' => 'admin', 'name' => 'Admin']);
    // $b2 = Role::create(['guard_name' => 'admin', 'name' => 'Fraksi']);
    // $role = Role::create(['name' => 'Fraksi']);
    // echo ;
    // $u = Auth::guard('admin')->user();

    // $u->assignRole(3);
    $u = Admin::role(3)->get();

    dd($u);
});

Auth::routes([ 'verify' => true ]);
Route::namespace('User')->group(function(){

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix' => 'event'], function(){
    Route::get('/', 'EventController@index')->name('event');
    Route::get('/{slug}', 'EventController@detail')->name('event.detail');
});

Route::group(['prefix' => 'tanya-jawab'], function(){
    Route::get('/', 'QnAController@index')->name('QA');
    Route::get('/buat-pertanyaan', 'QnAController@tambah')->middleware('auth','verified')->name('QA.tambah');
    Route::post('/simpan', 'QnAController@simpan')->name('QA.simpan');
    Route::get('/{slug}', 'QnAController@detail')->name('QA.detail');
    Route::get('/kategori/{slug}', 'QnAController@kategori')->name('QA.kategori');
});

Route::group(['prefix' => 'galeri'], function(){
    Route::get('/', 'GaleriController@index')->name('galeri');
    Route::get('/{slug}', 'GaleriController@detail')->name('galeri.detail');
    Route::get('/p/instagram', 'GaleriController@instagram')->name('galeri.instagram');
    Route::get('/p/video', 'GaleriController@video')->name('galeri.video');
});

Route::group(['prefix' => 'tentang'], function(){
    Route::get('/sejarah-pendirian-pkb', 'TentangController@sejarah')->name('tentang.sejarah');
    Route::get('/naskah-deklarasi', 'TentangController@NaskahDeklarasi')->name('tentang.naskah_deklarasi');
    Route::get('/ad-art-pkb-2014', 'TentangController@ADARTPKB2014')->name('tentang.ad_art');
    Route::get('/makna-logo-pkb', 'TentangController@MaknaLogoPKB')->name('tentang.makna_logo');
    Route::get('/visi-dan-misi', 'TentangController@VisidanMisi')->name('tentang.visi_misi');
    Route::get('/mabda-siyasi', 'TentangController@MabdaSiyasi')->name('tentang.mabda_siyasi');
});

Route::group(['prefix' => 'fraksi'], function(){
    Route::get('/', 'FraksiController@index')->name('fraksi');
    Route::get('/detail', 'FraksiController@detail')->name('fraksi.detail');
});

	Route::namespace('Auth')->group(function(){
		// Route::get('/verifikasi', 'VerifikasiController@verifikasi')->name('Verifikasi');
		Route::get('/profile', 'ProfileController@index')->name('Profile');
        Route::post('/profile/update', 'ProfileController@update')->name('profile.update');
		// Route::get('/reset', 'ResetPasswordController@index')->name('reset');
	});
});

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
        Route::get('/daftar','RegisterController@showRegistrationForm')->name('register');
        Route::post('/daftar','RegisterController@register');

        //Forgot Password Routes
        Route::get('/lupa','ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('/lupa/email','ForgotPasswordController@sendResetLinkEmail')->name('lupa.email');

        //Reset Password Routes
        Route::get('/lupa/{token}','ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('/lupa','ResetPasswordController@reset')->name('password.update');

        // Email Verification Route(s)
        Route::get('email/verify','VerificationController@show')->name('verification.notice');
        Route::get('email/verify/{id}','VerificationController@verify')->name('verification.verify');
        Route::get('email/resend','VerificationController@resend')->name('verification.resend');

    });

//     Route::get('/dashboard','HomeController@index')->name('home')->middleware('guard.verified:admin,admin.verification.notice');

//     //Put all of your admin routes here...

// });

/* ----------------------- Admin Routes END -------------------------------- */
