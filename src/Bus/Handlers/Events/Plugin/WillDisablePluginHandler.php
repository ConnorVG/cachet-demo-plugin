<?php

namespace ConnorVG\CachetDemoPlugin\Bus\Handlers\Events\Plugin;

use CachetHQ\Cachet\Bus\Events\Plugin\PluginWillBeDisabledEvent;

class WillDisablePluginHandler
{
    /**
     * Handle the event.
     *
     * @param \CachetHQ\Cachet\Bus\Events\Plugin\PluginWillBeDisabledEvent $event
     *
     * @return void
     */
    public function handle(PluginWillBeDisabledEvent $event)
    {
        // We're only interested in this plugin.
        if ($event->plugin->name !== 'connorvg/cachet-demo-plugin') {
            return;
        }

        // ...
    }
}
