<?php

/*
 * This file is part of the Cachet Demo Plugin.
 *
 * (c) Connor S. Parks
 */

namespace ConnorVG\CachetDemoPlugin\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

/**
 * This is the dashboard routes class.
 *
 * @author Connor S. Parks <connor@connorvg.tv>
 */
class DashboardRoutes
{
    /**
     * Define the demo plugin dashboard routes.
     *
     * @param \Illuminate\Contracts\Routing\Registrar $router
     *
     * @return void
     */
    public function map(Registrar $router)
    {
        $router->group([
            'middleware' => ['web', 'auth'],
            'namespace'  => 'Dashboard',
            'prefix'     => 'dashboard/cachet-demo-plugin',
            'as'         => 'dashboard.cachet-demo-plugin.',
        ], function (Registrar $router) {
            $router->get('/', [
                'as'   => 'entries',
                'uses' => 'DemoController@showEntries',
            ]);
            $router->get('/add', [
                'as'   => 'entries.add',
                'uses' => 'DemoController@showAddEntry',
            ]);
            $router->post('/add', 'DemoController@addEntryAction');
            $router->get('/{cdp_entry}/edit', [
                'as'   => 'entries.edit',
                'uses' => 'DemoController@showEditEntry',
            ]);
            $router->post('/{cdp_entry}/edit', 'DemoController@updateEntryAction');
            $router->delete('/{cdp_entry}/delete', [
                'as'   => 'delete',
                'uses' => 'DemoController@deleteEntryAction',
            ]);
        });
    }
}
