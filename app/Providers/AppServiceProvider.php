<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    // public function boot()
    // {
    //     if(\DB::getDriverName() === 'sqlite') {
    //       \DB::statement(\DB::raw('PRAGMA foreign_keys=1'));
    //     }
    // }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if(\DB::getDriverName() === 'sqlite') {
          \DB::statement(\DB::raw('PRAGMA foreign_keys=1'));
        }
    }
}