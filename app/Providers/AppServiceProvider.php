<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Carbon\Carbon;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Schema::defaultStringLength(191);
        VerifyEmail::toMailUsing(function ($notifiable) {
            $verifyUrl = URL::temporarySignedRoute(
                'verification.verify', Carbon::now()->addMinutes(60), ['id' => $notifiable->getKey()]
            );

            return (new MailMessage)
                ->subject('Selamat Datang!')
                ->markdown('emails.verify', ['url' => $verifyUrl]);
        });
    }
}
