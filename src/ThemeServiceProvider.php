<?php

namespace Skotner\Theme;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Skotner\Theme\Http\Middleware\ThemeMiddleware;

class ThemeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/theme.php' => config_path('theme.php'),
        ], 'config');

        $this->mergeConfigFrom(__DIR__.'/../config/theme.php', 'theme');

        $router = $this->app->make(Router::class);
        $router->aliasMiddleware('theme', ThemeMiddleware::class);
    }

    public function register()
    {
    }
}
