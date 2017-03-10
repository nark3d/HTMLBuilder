<?php

namespace BestServedCold\HTMLBuilder\Html\Node;

use BestServedCold\HTMLBuilder\Html\Node;

/**
 * Class Override
 * 
 * @package BestServedCold\HTMLBuilder\Html\Node
 */
trait Override
{
    /**
     * @param  $type
     * @param  $string
     * @return Node
     */
    public abstract function attribute($type, $string);

    /**
     * @param string        $string
     * @param string|null   $type
     * @return Node
     */
    public function data($string, $type = null)
    {
        $type = $type ? 'data-' . $type : 'data';
        return $this->attribute($type, $string);
    }

    /**
     * @param  string|null $string
     * @return Node
     */
    public function acceptcharset($string = null)
    {
        return $this->attribute('accept-charset', $string);
    }

    /**
     * @param null $value
     * @return Node
     */
    public function contentAttribute($value = null)
    {
        return $this->attribute('content', $value);
    }
}
