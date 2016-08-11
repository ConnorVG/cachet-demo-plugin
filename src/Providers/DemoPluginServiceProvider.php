<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ConnorVG\CachetDemoPlugin\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

/**
 * This is the demo plugin service provider.
 *
 * @author Connor S. Parks <connor@connorvg.tv>
 */
class DemoPluginServiceProvider extends ServiceProvider
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
     * Boot the service provider.
     *
     * @return void
     */
    public function boot(Router $dispatcher)
    {
        $router->group(['namespace' => $this->namespace], function (Router $router) {
            foreach (glob(app_path('Http//Routes').'/*.php') as $file) {
                $this->app->make('ConnorVG\\CachetDemoPlugin\\Http\\Routes\\'.basename($file, '.php'))->map($router);
            }
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // ...
    }
}
