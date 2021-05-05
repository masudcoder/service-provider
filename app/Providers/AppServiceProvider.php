<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Billing\ProcessOnlinePayment;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ProcessOnlinePayment::class, function () {
            return new ProcessOnlinePayment('usd');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
