<?php

namespace App\Providers;

use App\Repositories\KeihiInterface;
use App\Repositories\KeihiRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // 経費インターフェスと経費リポジトリの連結
        $this->app->bind(KeihiInterface::class, KeihiRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
