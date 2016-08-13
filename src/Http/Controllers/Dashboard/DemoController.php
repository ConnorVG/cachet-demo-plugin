<?php

/*
 * This file is part of the Cachet Demo Plugin.
 *
 * (c) Connor S. Parks
 */

namespace ConnorVG\CachetDemoPlugin\Http\Controllers\Dashboard;

use Illuminate\Routing\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\View;

/**
 * This is the demo dashboard controller.
 *
 * @author Connor S. Parks <connor@connorvg.tv>
 */
class DemoController extends Controller
{
    /**
     * Shows the demo index.
     *
     * @return \Illuminate\View\View
     */
    public function showIndex()
    {
        return View::make('connorvg/cachet-demo-plugin::dashboard.index')
            ->withPageTitle(trans('connorvg/cachet-demo-plugin::dashboard.cachet-demo-plugin').' - '.trans('dashboard.dashboard'));
    }
}
