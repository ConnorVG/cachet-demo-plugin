<?php

/*
 * This file is part of the Cachet Demo Plugin.
 *
 * (c) Connor S. Parks
 */

namespace ConnorVG\CachetDemoPlugin\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

/**
 * This is the event service provider.
 *
 * @author Connor S. Parks <connor@connorvg.tv>
 */
class EventServiceProvider extends ServiceProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'CachetHQ\Cachet\Bus\Events\Plugin\PluginWasEnabledEvent' => [
            'ConnorVG\CachetDemoPlugin\Bus\Handlers\Events\Plugin\EnablePluginHandler',
        ],
        'CachetHQ\Cachet\Bus\Events\Plugin\PluginWillBeDisabledEvent' => [
            'ConnorVG\CachetDemoPlugin\Bus\Handlers\Events\Plugin\WillDisablePluginHandler',
        ],
    ];
}
