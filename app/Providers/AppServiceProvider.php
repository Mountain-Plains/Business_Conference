<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Template;

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
        Schema::defaultStringLength(191);

        view()->composer('layout.main',function ($view){
           $view->with('template', Template::orderBy('applied_at', 'desc')->get()->first());
        });

        view()->composer('layout.nav',function ($view){
            //dd(Template::orderBy('applied_at', 'desc')->get()->last());
            $view->with('template',Template::orderBy('applied_at', 'desc')->get()->first());
        });
    }
}
