<?php

namespace BestServedCold\HTMLBuilder\Html;

/**
 * Class NonStandard
 * 
 * @package BestServedCold\HTMLBuilder\Html
 */
trait Special
{
    /**
     * @param  null    $value
     * @return Node
     */
    public static function comment($value = null)
    {
        return (new Node('!--' . $value . '--'))->void();
    }

    /**
     * @param  null    $value
     * @return Node
     */
    public static function doctype($value = null)
    {
        return (new Node('!DOCTYPE'))->attribute($value ?: 'html')->void();
    }
}
