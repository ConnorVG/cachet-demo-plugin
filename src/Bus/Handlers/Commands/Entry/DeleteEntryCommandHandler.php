<?php

/*
 * This file is part of the Cachet Demo Plugin.
 *
 * (c) Connor S. Parks
 */

namespace ConnorVG\CachetDemoPlugin\Bus\Handlers\Commands\Entry;

use ConnorVG\CachetDemoPlugin\Bus\Commands\Entry\DeleteEntryCommand;
use ConnorVG\CachetDemoPlugin\Bus\Events\Entry\EntryWasDeletedEvent;
use ConnorVG\CachetDemoPlugin\Models\Entry;

class DeleteEntryCommandHandler
{
    /**
     * Handle the delete entry command.
     *
     * @param \ConnorVG\CachetDemoPlugin\Bus\Commands\Entry\DeleteEntryCommand $command
     *
     * @return \ConnorVG\CachetDemoPlugin\Models\Entry
     */
    public function handle(DeleteEntryCommand $command)
    {
        $entry = $command->entry;

        event(new EntryWasDeletedEvent($entry));

        $entry->delete();
    }
}
