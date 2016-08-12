<?php

namespace ConnorVG\CachetDemoPlugin\Bus\Handlers\Events\Plugin;

use CachetHQ\Cachet\Bus\Events\Plugin\PluginWasWillDisableHandler;

class WillDisablePluginHandler
{
    /**
     * Handle the event.
     *
     * @param \CachetHQ\Cachet\Bus\Events\Plugin\PluginWasWillDisableHandler $event
     *
     * @return void
     */
    public function handle(PluginWasWillDisableHandler $event)
    {
        // We're only interested in this plugin.
        if ($event->plugin->name !== 'connorvg/cachet-demo-plugin') {
            return;
        }

        // do whatever cleanup is required
    }
}
