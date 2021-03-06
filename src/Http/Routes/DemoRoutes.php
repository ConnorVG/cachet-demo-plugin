<?php

/*
 * This file is part of the Cachet Demo Plugin.
 *
 * (c) Connor S. Parks
 */

namespace ConnorVG\CachetDemoPlugin\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

/**
 * This is the demo routes class.
 *
 * @author Connor S. Parks <connor@connorvg.tv>
 */
class DemoRoutes
{
    /**
     * Define the demo plugin routes.
     *
     * @param \Illuminate\Contracts\Routing\Registrar $router
     *
     * @return void
     */
    public function map(Registrar $router)
    {
        $router->group([
            'middleware' => ['web', 'ready'],
            'prefix'     => 'cachet-demo-plugin',
            'as'         => 'cachet-demo-plugin.',
        ], function (Registrar $router) {
            $router->get('/', [
                'as'   => 'index',
                'uses' => 'DemoController@showIndex',
            ]);
        });
    }
}
