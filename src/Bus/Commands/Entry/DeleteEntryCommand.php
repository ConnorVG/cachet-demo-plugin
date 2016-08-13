<?php

/*
 * This file is part of the Cachet Demo Plugin.
 *
 * (c) Connor S. Parks
 */

namespace ConnorVG\CachetDemoPlugin\Bus\Commands\Entry;

use ConnorVG\CachetDemoPlugin\Models\Entry;

final class DeleteEntryCommand
{
    /**
     * The entry.
     *
     * @var \ConnorVG\CachetDemoPlugin\Models\Entry
     */
    public $entry;

    /**
     * Create a new delete entry command instance.
     *
     * @param \ConnorVG\CachetDemoPlugin\Models\Entry $entry
     *
     * @return void
     */
    public function __construct(Entry $entry)
    {
        $this->entry = $entry;
    }
}
