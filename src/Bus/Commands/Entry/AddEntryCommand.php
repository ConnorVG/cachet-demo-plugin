<?php

/*
 * This file is part of the Cachet Demo Plugin.
 *
 * (c) Connor S. Parks
 */

namespace ConnorVG\CachetDemoPlugin\Bus\Commands\Entry;

final class AddEntryCommand
{
    /**
     * The entry text.
     *
     * @var string
     */
    public $text;

    /**
     * The entry order.
     *
     * @var int
     */
    public $order;

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'text'  => 'required|string',
        'order' => 'int',
    ];

    /**
     * Create a new add entry command instance.
     *
     * @param string $text
     * @param int    $order
     *
     * @return void
     */
    public function __construct($text, $order)
    {
        $this->text = $text;
        $this->order = $order;
    }
}
