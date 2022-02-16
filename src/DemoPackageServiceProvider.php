<?php

namespace nahidhasanlimon\demo;

use Illuminate\Support\ServiceProvider;

class DemoPackageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        include __DIR__.'/routes.php';
        $this->loadViewsFrom(__DIR__.'./views', 'demo');
        $this->loadRoutesFrom(__DIR__.'/routes.php');

    }
}
