<?php

namespace App\Providers;

use App\GeneralSetting;
use App\Menu;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        view()->composer('layout/*', function ($view)
        {
            $menus = Menu::all();

            $view->with('menus', $menus);
        });

        view()->composer('layout/*', function ($view)
        {
            $settings = GeneralSetting::first();

            $view->with('settings', $settings);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
