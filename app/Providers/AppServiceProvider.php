<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // setlocale(LC_TIME, 'id_ID');
        // config(['app.locale' => 'id']);
        // Carbon::setLocale('id');
        setlocale(LC_TIME, config('app.locale'));
        date_default_timezone_set('Asia/Jakarta');
    }
}
