<?php

/*
 * This file is part of the Cachet Demo Plugin.
 *
 * (c) Connor S. Parks
 */

namespace ConnorVG\CachetDemoPlugin\Foundation\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Translation\Translator;

class TranslatorServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @param \Illuminate\Translation\Translator $translator
     */
    public function boot(Translator $translator)
    {
        $translator->addNamespace('connorvg/cachet-demo-plugin', plugin_path(true, 'connorvg', 'cachet-demo-plugin').'/resources/lang');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // ...
    }
}
