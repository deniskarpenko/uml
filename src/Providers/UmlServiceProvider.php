<?php

namespace Deniskarpenko\Uml\Providers;

use Illuminate\Support\ServiceProvider;

class UmlServiceProvider extends ServiceProvider
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
        $this->loadRoutesFrom(__DIR__.'/../routes/uml.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'uml');
    }
}
