<?php

/*
 * This file is part of the Cachet Demo Plugin.
 *
 * (c) Connor S. Parks
 */

namespace ConnorVG\CachetDemoPlugin\Bus\Handlers\Commands\Entry;

use ConnorVG\CachetDemoPlugin\Bus\Commands\Entry\AddEntryCommand;
use ConnorVG\CachetDemoPlugin\Bus\Events\Entry\EntryWasAddedEvent;
use ConnorVG\CachetDemoPlugin\Models\Entry;

class AddEntryCommandHandler
{
    /**
     * Handle the add entry command.
     *
     * @param \ConnorVG\CachetDemoPlugin\Bus\Commands\Entry\AddEntryCommand $command
     *
     * @return \ConnorVG\CachetDemoPlugin\Models\Entry
     */
    public function handle(AddEntryCommand $command)
    {
        $entry = Entry::create($this->filter($command));

        event(new EntryWasAddedEvent($entry));

        return $entry;
    }

    /**
     * Filter the command data.
     *
     * @param \ConnorVG\CachetDemoPlugin\Bus\Commands\Incident\AddEntryCommand $command
     *
     * @return array
     */
    protected function filter(AddEntryCommand $command)
    {
        $params = [
            'text'  => $command->text,
            'order' => $command->order,
        ];

        return array_filter($params, function ($val) {
            return $val !== null;
        });
    }
}
