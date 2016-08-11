<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ConnorVG\CachetDemoPlugin\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

/**
 * This is the feed routes class.
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
        $router->group(['middleware' => ['web', 'ready']], function (Registrar $router) {
            $router->get('/demo-plugin', [
                'as'   => 'connorvg.demoplugin.index',
                'uses' => 'DemoController@indexAction',
            ]);
        });
    }
}
