<?php

/*
 * This file is part of the Cachet Demo Plugin.
 *
 * (c) Connor S. Parks
 */

namespace ConnorVG\CachetDemoPlugin\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Routing\Router;

/**
 * This is the route service provider.
 *
 * @author Connor S. Parks <connor@connorvg.tv>
 */
class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'ConnorVG\CachetDemoPlugin\Http\Controllers';

    /**
     * Define the routes for the application.
     *
     * @param \Illuminate\Routing\Router $router
     *
     * @return void
     */
    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function (Router $router) {
            $path = plugin_path(true, 'connorvg', 'cachet-demo-plugin');

            foreach (glob($path.'/src/Http/Routes/*.php') as $file) {
                $this->app->make('ConnorVG\\CachetDemoPlugin\\Http\\Routes\\'.basename($file, '.php'))->map($router);
            }
        });
    }
}
