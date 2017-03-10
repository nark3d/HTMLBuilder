<?php

namespace BestServedCold\HTMLBuilder\Output;

use BestServedCold\HTMLBuilder\Html\Node,
    BestServedCold\HTMLBuilder\Output;

/**
 * Class Children
 * 
 * @package BestServedCold\HTMLBuilder\Output
 */
class Children
{
    private $node;
    private $depth;
    private $content = [];
    private $string  = '';

    /**
     * Children constructor.
     * 
     * @param Node $node
     * @param int  $depth
     */
    public function __construct(Node $node, $depth)
    {
        $this->node    = $node;
        $this->depth   = $depth;
        $this->content = $node->getContent();
    }

    /**
     * @param  Node  $node
     * @param  int   $depth
     * @return string
     */
    public static function run(Node $node, $depth)
    {
        return (new static($node, $depth))->children();
    }

    /**
     * @return string
     */
    public function children()
    {
        $this->string .= $this->getContent();

        foreach ($this->node->getChildren() as $child) {
            $this->string .= $this->child($child) . $this->getContent();
        }

        return $this->string . $this->getContent();
    }

    /**
     * @return null|string
     */
    private function getContent()
    {
        $content = array_shift($this->content);
        return $content ? Format::string($content, $this->depth + 1) : null;
    }

    /**
     * @param  Node  $child
     * @return mixed
     */
    private function child(Node $child)
    {
        return (new Output($child, $this->depth + 1))->get();
    }
}
