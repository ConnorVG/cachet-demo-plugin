<?php

namespace ConnorVG\CachetDemoPlugin\Bus\Handlers\Events\Plugin;

use CachetHQ\Cachet\Bus\Events\Plugin\PluginWasEnabledHandler;

class EnablePluginHandler
{
    /**
     * Handle the event.
     *
     * @param \CachetHQ\Cachet\Bus\Events\Plugin\PluginWasEnabledHandler $event
     *
     * @return void
     */
    public function handle(PluginWasEnabledHandler $event)
    {
        // We're only interested in this plugin.
        if ($event->plugin->name !== 'connorvg/cachet-demo-plugin') {
            return;
        }

        // do whatever setup is required
    }
}
