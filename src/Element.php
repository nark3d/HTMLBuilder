<?php

namespace BestServedCold\HTMLBuilder;

/**
 * Class Element
 *
 * @package BestServedCold\Benchmark\Output\Html
 */
class Element
{
    /**
     * @var string $type
     */
    private $type;

    /**
     * @var null|string $value
     */
    private $value;

    /**
     * @var array $attributes
     */
    private $attributes = [];

    /**
     * @var array $children
     */
    private $children   = [];

    /**
     * @var bool $void
     */
    private $void       = false;

    /**
     * Element constructor.
     *
     * @param string $type
     * @param null   $value
     * @param array  $attributes
     */
    public function __construct($type, $value = null, $attributes = [])
    {
        $this->type       = $type;
        $this->value      = $value;
        $this->attributes = $attributes;
    }

    /**
     * @param  string $type
     * @return static
     */
    public static function add($type)
    {
        return new static($type);
    }

    /**
     * @param  $value
     * @return Element
     */
    public function value($value)
    {
        return $this->setValue($value);
    }

    /**
     * @return Element
     */
    public function void()
    {
        return $this->setVoid();
    }

    /**
     * @param  string      $attribute
     * @param  null|string $value
     * @return Element
     */
    public function attribute($attribute, $value = null)
    {
        return $this->addAttribute($attribute, $value);
    }

    /**
     * @param  Element $child
     * @return Element
     */
    public function child(self $child)
    {
        return $this->addChild($child);
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param  $value
     * @return $this
     * @throws \Exception
     */
    public function setValue($value)
    {
        if ($this->isVoid()) {
            throw new \Exception('Void elements cannot have a value.');
        }

        $this->value = $value;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param  bool       $bool
     * @return $this
     * @throws \Exception
     */
    public function setVoid($bool = true)
    {
        if ($bool && $this->getValue()) {
            throw new \Exception('Void elements cannot have a value.');
        }

        $this->void = true;

        return $this;
    }

    /**
     * @return bool
     */
    public function isVoid()
    {
        return $this->void;
    }

    /**
     * @return bool
     */
    public function hasChildren()
    {
        return ! empty($this->children);
    }

    /**
     * @return array
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @param  string $attribute
     * @param  null|string   $value
     * @return $this
     */
    public function addAttribute($attribute, $value = null)
    {
        $this->attributes[$attribute] = $value;
        return $this;
    }

    /**
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @return array
     */
    public function getAttributeKeys()
    {
        return array_keys($this->attributes);
    }

    /**
     * @return bool
     */
    public function hasAttributes()
    {
        return ! empty($this->attributes);
    }

    /**
     * @param  Element $element
     * @return $this
     */
    public function addChild(self $element)
    {
        $this->children[] = $element;
        return $this;
    }
}
