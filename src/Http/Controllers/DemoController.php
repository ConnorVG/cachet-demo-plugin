<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ConnorVG\DemoCachetPlugin\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Response;

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
