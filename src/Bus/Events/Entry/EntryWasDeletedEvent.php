<?php

/*
 * This file is part of the Cachet Demo Plugin.
 *
 * (c) Connor S. Parks
 */

namespace ConnorVG\CachetDemoPlugin\Bus\Events\Entry;

use ConnorVG\CachetDemoPlugin\Models\Entry;

final class EntryWasDeletedEvent implements EntryEventInterface
{
    /**
     * The entry that was deleted.
     *
     * @var \ConnorVG\CachetDemoPlugin\Models\Entry
     */
    public $entry;

    /**
     * Create a new entry was deleted event instance.
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
