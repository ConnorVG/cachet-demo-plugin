<?php

/*
 * This file is part of the Cachet Demo Plugin.
 *
 * (c) Connor S. Parks
 */

return [
    'cachet-demo-plugin'       => 'Cachet Demo Plugin',
    'cachet-demo-plugin-short' => 'CDP',

    // Entries
    'entries' => [
        'entries'  => 'Entry|Entries',
        'enabled'  => 'Enabled',
        'disabled' => 'Disabled',
        'add'  => [
            'title'   => 'Add an entry',
            'message' => 'You should add an entry.',
            'success' => 'Entry created.',
            'failure' => 'Something went wrong with the entry, please try again.',
        ],
        'edit' => [
            'title'   => 'Edit an entry',
            'success' => 'Entry updated.',
            'failure' => 'Something went wrong with the entry, please try again.',
        ],
        'delete' => [
            'success' => 'The entry has been deleted!',
            'failure' => 'The entry could not be deleted, please try again.',
        ],
    ],
];
