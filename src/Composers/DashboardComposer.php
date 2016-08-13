<?php

/*
 * This file is part of the Cachet Demo Plugin.
 *
 * (c) Connor S. Parks
 */

namespace ConnorVG\CachetDemoPlugin\Composers;

use Illuminate\Contracts\View\View;

class DashboardComposer
{
    /**
     * Bind data to the view.
     *
     * @param \Illuminate\Contracts\View\View $view
     *
     * @return void
     */
    public function compose(View $view)
    {
        $view->withTabs($this->getTabs($view->getData()));
    }

    /**
     * Get the tabs.
     *
     * @param array $data
     *
     * @return array
     */
    protected function getTabs(array $data)
    {
        $tabs = [[
            'active' => 'dashboard/cachet-demo-plugin*',
            'url'    => route('dashboard.cachet-demo-plugin.index'),
            'icon'   => 'ion ion-ios-nutrition-outline',
            'title'  => trans('connorvg/cachet-demo-plugin::dashboard.cachet-demo-plugin'),
            'order'  => 70001,
        ]];

        if (isset($data['tabs'])) {
            $tabs = array_merge_recursive($tabs, $data['tabs']);
        }

        return $tabs;
    }
}
