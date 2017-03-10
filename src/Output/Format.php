<?php

namespace BestServedCold\HTMLBuilder\Output;

use BestServedCold\HTMLBuilder\Html\Node;

/**
 * Class Format
 *
 * @package BestServedCold\HTMLBuilder\Output
 */
abstract class Format
{
    /**
     * @var int $tabSize
     */
    private static $tabSize = 4;

    /**
     * @param  string $string
     * @param  int    $depth
     * @return string
     */
    public static function string($string, $depth)
    {
        return str_pad($string, strlen($string) + ($depth * self::$tabSize), ' ', STR_PAD_LEFT) . PHP_EOL;
    }

    /**
     * @param int $tabSize
     */
    public static function setTabSize($tabSize)
    {
        self::$tabSize = $tabSize;
    }

    /**
     * @param  Node   $node
     * @param  string $attributes
     * @param  int    $depth
     * @return string
     */
    public static function begin(Node $node, $attributes, $depth)
    {
        return self::string('<' . $node->getType()  . $attributes . '>', $depth);
    }

    /**
     * @param  Node   $node
     * @param  int    $depth
     * @return string
     */
    public static function end(Node $node, $depth)
    {
        return self::string('</' . $node->getType() . '>', $depth);
    }
}
