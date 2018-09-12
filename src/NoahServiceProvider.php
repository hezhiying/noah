<?php

namespace Zine\Noah;

use Illuminate\Support\ServiceProvider;

Class NoahServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider
     */
    public function boot()
    {

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'noah');

        if (file_exists($routes = noah_path('routes.php'))) {
            $this->loadRoutesFrom($routes);
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadNoahAuthConfig();
    }

    /**
     * register noah and Setup auth configuration.
     *
     * @return void
     */
    public function loadNoahAuthConfig()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/noah.php', 'noah'
        );
        config(array_dot(config('noah.auth', []), 'auth.'));
    }
}
