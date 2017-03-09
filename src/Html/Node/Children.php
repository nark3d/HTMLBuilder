<?php

namespace BestServedCold\HTMLBuilder\Html\Node;

use BestServedCold\HTMLBuilder\Html\Node, Closure;

/**
 * Class Children
 *
 * @package BestServedCold\HTMLBuilder\Html\Node
 */
class Children
{
    /**
     * @var array $allowedTypes
     */
    private $allowedTypes = [
        Node::class,
        Closure::class,
        'array'
    ];

    /**
     * @var Node $node
     */
    private $node;

    /**
     * @var array $children
     */
    private $children;

    /**
     * Children constructor.
     *
     * @param Node  $node
     */
    public function __construct(Node $node)
    {
        $this->node     = $node;
    }

    /**
     * @param  Node  $node
     * @param  array $children
     * @return mixed
     */
    public static function run(Node $node, array $children)
    {
        return (new static($node))->loop($children);
    }

    /**
     * @param array $children
     */
    private function loop(array $children)
    {
        /** @var Node|array|Closure $child */
        foreach ($children as $child) {
            $type = $this->realType($child);
            $this->checkType($type);
            $this->child($type === 'Closure' ? call_user_func($child) : $child);
        }
    }

    /**
     * @param  Node|array $node
     * @return $this
     */
    private function child($node)
    {
        is_array($node) ? $this->loop($node) : $this->node->child($node);
        return $this;
    }

    /**
     * @param  mixed  $type
     * @return string
     */
    private function realType($type)
    {
        $phpType = gettype($type);
        return $phpType === 'object' ? get_class($type) : $phpType;
    }

    /**
     * @param $type
     * @throws \Exception
     */
    private function checkType($type)
    {
        if (! in_array($type, $this->allowedTypes)) {
            throw new \Exception('Type [' . $type . '] not allowed.');
        }
    }
}
