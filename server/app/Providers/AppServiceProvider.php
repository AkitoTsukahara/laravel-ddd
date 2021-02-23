<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\KeihiService;
use App\Services\KeihiServiceInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // 経費サービス
        $this->app->singleton(KeihiServiceInterface::class, KeihiService::class);
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
