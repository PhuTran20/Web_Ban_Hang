<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
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
        // View()->share('devvn_tinhthanhpho',DB::table('devvn_tinhthanhpho')->get());
        // View()->share('devvn_quanhuyen',DB::table('devvn_quanhuyen')->get());
        // View()->share('devvn_xaphuongthitran',DB::table('devvn_xaphuongthitran')->get());
    }
}