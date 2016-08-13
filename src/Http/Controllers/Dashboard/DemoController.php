<?php

/*
 * This file is part of the Cachet Demo Plugin.
 *
 * (c) Connor S. Parks
 */

namespace ConnorVG\CachetDemoPlugin\Http\Controllers\Dashboard;

use AltThree\Validator\ValidationException;
use ConnorVG\CachetDemoPlugin\Bus\Commands\Entry\AddEntryCommand;
use ConnorVG\CachetDemoPlugin\Bus\Commands\Entry\DeleteEntryCommand;
use ConnorVG\CachetDemoPlugin\Models\Entry;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

/**
 * This is the demo dashboard controller.
 *
 * @author Connor S. Parks <connor@connorvg.tv>
 */
class DemoController extends Controller
{
    /**
     * Shows the entries view.
     *
     * @return \Illuminate\View\View
     */
    public function showEntries()
    {
        $entries = Entry::orderBy('order')->orderBy('created_at')->get();

        return View::make('connorvg/cachet-demo-plugin::dashboard.index')
            ->withPageTitle(trans_choice('connorvg/cachet-demo-plugin::dashboard.entries.entries', 2).' - '.trans('dashboard.dashboard'))
            ->withEntries($entries);
    }

    /**
     * Shows the add entry view.
     *
     * @return \Illuminate\View\View
     */
    public function showAddEntry()
    {
        return View::make('connorvg/cachet-demo-plugin::dashboard.add')
            ->withPageTitle(trans('connorvg/cachet-demo-plugin::dashboard.entries.add.title').' - '.trans('dashboard.dashboard'));
    }

    /**
     * Adds a new entry.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addEntryAction()
    {
        $entryData = Binput::get('entry');

        try {
            $entry = dispatch(new AddEntryCommand(
                $entryData['text'],
                $entryData['order']
            ));
        } catch (ValidationException $e) {
            return Redirect::route('dashboard.cachet-demo-plugin.add')
                ->withInput(Binput::all())
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('connorvg/cachet-demo-plugin::dashboard.entries.add.failure')))
                ->withErrors($e->getMessageBag());
        }

        return Redirect::route('dashboard.cachet-demo-plugin.entries')
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('connorvg/cachet-demo-plugin::dashboard.entries.add.success')));
    }

    /**
     * Deletes a given entry.
     *
     * @param \ConnorVG\CachetDemoPlugin\Models\Entry $entry
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteEntryAction(Entry $entry)
    {
        dispatch(new DeleteEntryCommand($entry));

        return Redirect::route('dashboard.cachet-demo-plugin.entries')
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('connorvg/cachet-demo-plugin::dashboard.entries.delete.success')));
    }
}
