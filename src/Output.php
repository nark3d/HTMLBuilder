<?php

namespace BestServedCold\HTMLBuilder;

use BestServedCold\HTMLBuilder\Html\Node;
use BestServedCold\HTMLBuilder\Output\Format;
use BestServedCold\PhalueObjects\ExtendedArray\ExtendedArrayTrait;
use BestServedCold\HTMLBuilder\Output\Children;

/**
 * Class Output
 * 
 * @package BestServedCold\HTMLBuilder
 */
class Output
{
    use ExtendedArrayTrait;

    /**
     * @var Node
     */
    private $node;

    /**
     * @var int
     */
    private static $depth = 0;

    /**
     * Output constructor.
     *
     * @param Node $node
     * @param int  $depth
     */
    public function __construct(Node $node, $depth = null)
    {
        $this->node  = $node;
        $depth ? self::$depth = $depth : null;
    }

    /**
     * @param int $depth
     */
    public static function setDepth($depth)
    {
        self::$depth = $depth;
    }

    /**
     * @return string
     */
    public function get()
    {
        $begin = Format::begin($this->node, $this->attributes(), self::$depth);
        return $this->node->isVoid()
            ? $begin
            : $begin . Children::run($this->node, self::$depth) . Format::end($this->node, self::$depth);
    }

    /**
     * @param int $tabSize
     */
    public static function setTabSize($tabSize)
    {
        Format::setTabSize($tabSize);
    }

    /**
     * @param  string      $string
     * @return null|string
     */
    private function attributes($string = ' ')
    {
        return empty($this->node->getAttributes())
            ? null
            : $string . $this->arrayToAttributeArray($this->node->getAttributes());
    }
}
