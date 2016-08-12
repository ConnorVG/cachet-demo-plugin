<?php

if (! defined('CACHET_VERSION')) {
    throw new Exception('Cachet not found!');
}

// @todo: make this a lot nicer to work with... Auto from config etc.
// Will most likely need to utilise the composer.json file for extended customisations.

// This is too early in it's life cycle and needs to be figured out still.
// app()->register(new ConnorVG\CachetDemoPlugin\Providers\DemoPluginServiceProvider);
