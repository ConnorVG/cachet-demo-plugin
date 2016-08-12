<?php

/*
 * This file is part of the Cachet Demo Plugin.
 *
 * (c) Connor S. Parks
 */

namespace ConnorVG\CachetDemoPlugin\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Response;

/**
 * This is the demo controller.
 *
 * @author Connor S. Parks <connor@connorvg.tv>
 */
class DemoController extends Controller
{
    /**
     * Shows the demo index.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAction()
    {
        return new Response('Hello, World!');
    }
}
