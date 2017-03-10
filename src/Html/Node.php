<?php

namespace BestServedCold\HTMLBuilder\Html;

use BestServedCold\HTMLBuilder\Html\Node\Children,
    BestServedCold\HTMLBuilder\Html\Node\Attribute,
    BestServedCold\HTMLBuilder\Html\Node\Override;


/**
 * Class Node
 *
 * @package BestServedCold\HTMLBuilder
 * @method $this accept($string = null)
 * @method $this accesskey($string = null)
 * @method $this action($string = null)
 * @method $this align($string = null)
 * @method $this alt($string = null)
 * @method $this async($string = null)
 * @method $this autocomplete($string = null)
 * @method $this autofocus($string = null)
 * @method $this autoplay($string = null)
 * @method $this autosave($string = null)
 * @method $this bgcolor($string = null)
 * @method $this border($string = null)
 * @method $this buffered($string = null)
 * @method $this challenge($string = null)
 * @method $this charset($string = null)
 * @method $this checked($string = null)
 * @method $this cite($string = null)
 * @method $this class($string = null)
 * @method $this code($string = null)
 * @method $this codebase($string = null)
 * @method $this color($string = null)
 * @method $this cols($string = null)
 * @method $this colspan($string = null)
 * @method $this contenteditable($string = null)
 * @method $this contextmenu($string = null)
 * @method $this controls($string = null)
 * @method $this coords($string = null)
 * @method $this datetime($string = null)
 * @method $this default($string = null)
 * @method $this defer($string = null)
 * @method $this dir($string = null)
 * @method $this dirname($string = null)
 * @method $this disabled($string = null)
 * @method $this download($string = null)
 * @method $this draggable($string = null)
 * @method $this dropzone($string = null)
 * @method $this enctype($string = null)
 * @method $this for($string = null)
 * @method $this form($string = null)
 * @method $this formaction($string = null)
 * @method $this headers($string = null)
 * @method $this height($string = null)
 * @method $this hidden($string = null)
 * @method $this high($string = null)
 * @method $this href($string = null)
 * @method $this hreflang($string = null)
 * @method $this http-equiv($string = null)
 * @method $this icon($string = null)
 * @method $this id($string = null)
 * @method $this integrity($string = null)
 * @method $this ismap($string = null)
 * @method $this itemprop($string = null)
 * @method $this keytype($string = null)
 * @method $this kind($string = null)
 * @method $this label($string = null)
 * @method $this lang($string = null)
 * @method $this language($string = null)
 * @method $this list($string = null)
 * @method $this loop($string = null)
 * @method $this low($string = null)
 * @method $this manifest($string = null)
 * @method $this max($string = null)
 * @method $this maxlength($string = null)
 * @method $this media($string = null)
 * @method $this method($string = null)
 * @method $this min($string = null)
 * @method $this multiple($string = null)
 * @method $this muted($string = null)
 * @method $this name($string = null)
 * @method $this novalidate($string = null)
 * @method $this onabort($string = null)
 * @method $this onautocomplete($string = null)
 * @method $this onautocompleteerror($string = null)
 * @method $this onblur($string = null)
 * @method $this oncancel($string = null)
 * @method $this oncanplay($string = null)
 * @method $this oncanplaythrough($string = null)
 * @method $this onchange($string = null)
 * @method $this onclick($string = null)
 * @method $this onclose($string = null)
 * @method $this oncontextmenu($string = null)
 * @method $this oncuechange($string = null)
 * @method $this ondblclick($string = null)
 * @method $this ondrag($string = null)
 * @method $this ondragend($string = null)
 * @method $this ondragenter($string = null)
 * @method $this ondragexit($string = null)
 * @method $this ondragleave($string = null)
 * @method $this ondragover($string = null)
 * @method $this ondragstart($string = null)
 * @method $this ondrop($string = null)
 * @method $this ondurationchange($string = null)
 * @method $this onemptied($string = null)
 * @method $this onended($string = null)
 * @method $this onerror($string = null)
 * @method $this onfocus($string = null)
 * @method $this oninput($string = null)
 * @method $this oninvalid($string = null)
 * @method $this onkeydown($string = null)
 * @method $this onkeypress($string = null)
 * @method $this onkeyup($string = null)
 * @method $this onload($string = null)
 * @method $this onloadeddata($string = null)
 * @method $this onloadedmetadata($string = null)
 * @method $this onloadstart($string = null)
 * @method $this onmousedown($string = null)
 * @method $this onmouseenter($string = null)
 * @method $this onmouseleave($string = null)
 * @method $this onmousemove($string = null)
 * @method $this onmouseout($string = null)
 * @method $this onmouseover($string = null)
 * @method $this onmouseup($string = null)
 * @method $this onmousewheel($string = null)
 * @method $this onpause($string = null)
 * @method $this onplay($string = null)
 * @method $this onplaying($string = null)
 * @method $this onprogress($string = null)
 * @method $this onratechange($string = null)
 * @method $this onreset($string = null)
 * @method $this onresize($string = null)
 * @method $this onscroll($string = null)
 * @method $this onseeked($string = null)
 * @method $this onseeking($string = null)
 * @method $this onselect($string = null)
 * @method $this onshow($string = null)
 * @method $this onsort($string = null)
 * @method $this onstalled($string = null)
 * @method $this onsubmit($string = null)
 * @method $this onsuspend($string = null)
 * @method $this ontimeupdate($string = null)
 * @method $this ontoggle($string = null)
 * @method $this onvolumechange($string = null)
 * @method $this onwaiting($string = null)
 * @method $this open($string = null)
 * @method $this optimum($string = null)
 * @method $this pattern($string = null)
 * @method $this ping($string = null)
 * @method $this placeholder($string = null)
 * @method $this poster($string = null)
 * @method $this preload($string = null)
 * @method $this radiogroup($string = null)
 * @method $this readonly($string = null)
 * @method $this rel($string = null)
 * @method $this required($string = null)
 * @method $this reversed($string = null)
 * @method $this rows($string = null)
 * @method $this rowspan($string = null)
 * @method $this sandbox($string = null)
 * @method $this scope($string = null)
 * @method $this scoped($string = null)
 * @method $this seamless($string = null)
 * @method $this selected($string = null)
 * @method $this shape($string = null)
 * @method $this size($string = null)
 * @method $this sizes($string = null)
 * @method $this slot($string = null)
 * @method $this span($string = null)
 * @method $this spellcheck($string = null)
 * @method $this src($string = null)
 * @method $this srcdoc($string = null)
 * @method $this srclang($string = null)
 * @method $this srcset($string = null)
 * @method $this start($string = null)
 * @method $this step($string = null)
 * @method $this style($string = null)
 * @method $this summary($string = null)
 * @method $this tabindex($string = null)
 * @method $this target($string = null)
 * @method $this title($string = null)
 * @method $this type($string = null)
 * @method $this usemap($string = null)
 * @method $this value($string = null)
 * @method $this width($string = null)
 * @method $this wrap($string = null)
 */
class Node
{
    use Override;

    /**
     * @var string $type
     */
    private $type;

    /**
     * @var array $value
     */
    private $content = [];

    /**
     * @var bool $void
     */
    private $void            = false;

    /**
     * @var array $children
     */
    private $children        = [];

    /**
     * @var array $attributes
     */
    private $attributes      = [];

    /**
     * Node constructor.
     *
     * @param string  $type
     * @param array   $children
     * @param boolean $void
     */
    public function __construct($type, $children = [], $void = false)
    {
        $this->type = $type;
        $this->void = $void;
        empty($children) ?: Children::run($this, $children);
    }
    
    /**
     * @param  string $name
     * @param  array  $arguments
     * @return Node
     * @throws \Exception
     */
    public function __call($name, $arguments)
    {
        if (! Attribute::isAttribute($name)) {
            throw new \Exception('Attribute [' . $name . '] is not valid.');
        }

        if (! Attribute::isElementAttribute($name, $this->getType())) {
            throw new \Exception(
                'Attribute [' . $name . '] is not a valid for element type [' . $this->getType() . '].'
            );
        }

        return $this->attribute($name, reset($arguments) ?: null);
    }

    /**
     * @param  array ...$content
     * @return $this
     */
    public function content(...$content)
    {
        $this->content = array_merge($this->content, $content);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return array
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @return bool
     */
    public function hasChildren()
    {
        return count($this->getChildren()) !== 0;
    }

    /**
     * @param  Node $node
     * @return $this
     */
    public function child(Node $node)
    {
        $this->children[] = $node;
        return $this;
    }

    /**
     * @param  string $attribute
     * @param  null   $value
     * @return $this
     */
    public function attribute($attribute, $value = null)
    {
        is_array($attribute)
            ? $this->attributeArray($attribute)
            : $this->attributes[$attribute] = $value;
        return $this;
    }

    /**
     * @param  array $attributes
     * @return $this
     */
    public function attributeArray(array $attributes)
    {
        foreach($attributes as $key => $child) {
            $this->attribute($key, $child);
        }

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @return $this
     */
    public function void()
    {
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
}
