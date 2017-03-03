<?php

namespace BestServedCold\HTMLBuilder;

use BestServedCold\PhalueObjects\ExtendedArray\ExtendedArrayTrait;

class Output
{
    use ExtendedArrayTrait;

    /**
     * @var Element
     */
    private $tag;

    /**
     * @var int
     */
    private $depth;

    /**
     * @var int
     */
    private static $tabSize = 4;

    /**
     * Output constructor.
     *
     * @param Element $tag
     * @param int     $depth
     */
    public function __construct(Element $tag, $depth = 0)
    {
        $this->tag      = $tag;
        $this->depth    = $depth;
    }

    /**
     * @return string
     */
    public function get()
    {
        return $this->tag->isVoid()
            ? $this->begin()
            : $this->begin() .
            $this->inner() .
            $this->children() .
            $this->end();
    }

    /**
     * @param $size
     */
    public static function setTabSize($size)
    {
        self::$tabSize = $size;
    }

    /**
     * @param  string $string
     * @return string
     */
    private function children($string = '')
    {
        /** @var Element $child */
        foreach ($this->tag->getChildren() as $child) {
            $string .= $this->child($child);
        }

        return $string;
    }

    /**
     * @param  Element $child
     * @return mixed
     */
    private function child(Element $child)
    {
        return (new static($child, $this->depth + 1))->get();
    }

    /**
     * @return string
     */
    private function begin()
    {
        return $this->getTab('<' . $this->tag->getType()  . $this->attributes() . '>', $this->depth) . PHP_EOL;
    }

    /**
     * @return null|string
     */
    private function inner()
    {
        return $this->tag->getValue() ? $this->getTab($this->tag->getValue(), $this->depth + 1) . PHP_EOL : null;
    }

    /**
     * @return string
     */
    private function end()
    {
        return $this->getTab('</' . $this->tag->getType() . '>', $this->depth) . PHP_EOL;
    }

    /**
     * @param  string      $string
     * @return null|string
     */
    private function attributes($string = ' ')
    {
        return $this->tag->hasAttributes()
            ? $string . $this->arrayToAttributeArray($this->tag->getAttributes())
            : null ;
    }

    /**
     * @param  $input
     * @param  $depth
     * @return string
     */
    private function getTab($input, $depth)
    {
        return str_pad($input, strlen($input) + ($depth * self::$tabSize), ' ', STR_PAD_LEFT);
    }
}
