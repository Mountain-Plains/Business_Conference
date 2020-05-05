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

    /**s
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('Index.index',function ($view){
           $view->with('template', Template::orderByRaw('ifnull(applied_at,created_at) desc')->first());
        });

        view()->composer('layout.main',function ($view){
            $view->with('template', Template::orderByRaw('ifnull(applied_at,created_at) desc')->first());
        });

        view()->composer('layout.nav',function ($view){
            $view->with('template',Template::orderByRaw('ifnull(applied_at,created_at) desc')->first());
        });

    }
}
