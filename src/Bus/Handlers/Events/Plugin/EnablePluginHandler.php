<?php

namespace ConnorVG\CachetDemoPlugin\Bus\Handlers\Events\Plugin;

use CachetHQ\Cachet\Bus\Events\Plugin\PluginWasEnabledEvent;

class EnablePluginHandler
{
    /**
     * Handle the event.
     *
     * @param \CachetHQ\Cachet\Bus\Events\Plugin\PluginWasEnabledEvent $event
     *
     * @return void
     */
    public function handle(PluginWasEnabledEvent $event)
    {
        // We're only interested in this plugin.
        if ($event->plugin->name !== 'connorvg/cachet-demo-plugin') {
            return;
        }

        // ...
    }
}
