<?php

namespace BestServedCold\HTMLBuilder;

use BestServedCold\HTMLBuilder\Html\Node,
    BestServedCold\HTMLBuilder\Html\Special,
    BestServedCold\HTMLBuilder\Html\Node\Element,
    InvalidArgumentException;

/**
 * Class Html
 *
 * @package BestServedCold\HTMLBuilder
 * @method  static Node a($argument = null, ...$arguments)
 * @method  static Node abbr($argument = null, ...$arguments)
 * @method  static Node address($argument = null, ...$arguments)
 * @method  static Node area($argument = null, ...$arguments)
 * @method  static Node article($argument = null, ...$arguments)
 * @method  static Node aside($argument = null, ...$arguments)
 * @method  static Node audio($argument = null, ...$arguments)
 * @method  static Node b($argument = null, ...$arguments)
 * @method  static Node base($argument = null, ...$arguments)
 * @method  static Node bdi($argument = null, ...$arguments)
 * @method  static Node bdo($argument = null, ...$arguments)
 * @method  static Node blockquote($argument = null, ...$arguments)
 * @method  static Node body($argument = null, ...$arguments)
 * @method  static Node br($argument = null, ...$arguments)
 * @method  static Node button($argument = null, ...$arguments)
 * @method  static Node canvas($argument = null, ...$arguments)
 * @method  static Node caption($argument = null, ...$arguments)
 * @method  static Node cite($argument = null, ...$arguments)
 * @method  static Node code($argument = null, ...$arguments)
 * @method  static Node col($argument = null, ...$arguments)
 * @method  static Node colgroup($argument = null, ...$arguments)
 * @method  static Node datalist($argument = null, ...$arguments)
 * @method  static Node dd($argument = null, ...$arguments)
 * @method  static Node del($argument = null, ...$arguments)
 * @method  static Node details($argument = null, ...$arguments)
 * @method  static Node dfn($argument = null, ...$arguments)
 * @method  static Node dialog($argument = null, ...$arguments)
 * @method  static Node div($argument = null, ...$arguments)
 * @method  static Node dl($argument = null, ...$arguments)
 * @method  static Node dt($argument = null, ...$arguments)
 * @method  static Node em($argument = null, ...$arguments)
 * @method  static Node embed($argument = null, ...$arguments)
 * @method  static Node fieldset($argument = null, ...$arguments)
 * @method  static Node figcaption($argument = null, ...$arguments)
 * @method  static Node figure($argument = null, ...$arguments)
 * @method  static Node footer($argument = null, ...$arguments)
 * @method  static Node form($argument = null, ...$arguments)
 * @method  static Node h1($argument = null, ...$arguments)
 * @method  static Node h2($argument = null, ...$arguments)
 * @method  static Node h3($argument = null, ...$arguments)
 * @method  static Node h4($argument = null, ...$arguments)
 * @method  static Node h5($argument = null, ...$arguments)
 * @method  static Node h6($argument = null, ...$arguments)
 * @method  static Node head($argument = null, ...$arguments)
 * @method  static Node header($argument = null, ...$arguments)
 * @method  static Node hr($argument = null, ...$arguments)
 * @method  static Node html($argument = null, ...$arguments)
 * @method  static Node i($argument = null, ...$arguments)
 * @method  static Node iframe($argument = null, ...$arguments)
 * @method  static Node img($argument = null, ...$arguments)
 * @method  static Node input($argument = null, ...$arguments)
 * @method  static Node ins($argument = null, ...$arguments)
 * @method  static Node kbd($argument = null, ...$arguments)
 * @method  static Node keygen($argument = null, ...$arguments)
 * @method  static Node label($argument = null, ...$arguments)
 * @method  static Node legend($argument = null, ...$arguments)
 * @method  static Node li($argument = null, ...$arguments)
 * @method  static Node link($argument = null, ...$arguments)
 * @method  static Node main($argument = null, ...$arguments)
 * @method  static Node map($argument = null, ...$arguments)
 * @method  static Node mark($argument = null, ...$arguments)
 * @method  static Node menu($argument = null, ...$arguments)
 * @method  static Node menuitem($argument = null, ...$arguments)
 * @method  static Node meta($argument = null, ...$arguments)
 * @method  static Node meter($argument = null, ...$arguments)
 * @method  static Node nav($argument = null, ...$arguments)
 * @method  static Node noscript($argument = null, ...$arguments)
 * @method  static Node object($argument = null, ...$arguments)
 * @method  static Node ol($argument = null, ...$arguments)
 * @method  static Node optgroup($argument = null, ...$arguments)
 * @method  static Node option($argument = null, ...$arguments)
 * @method  static Node output($argument = null, ...$arguments)
 * @method  static Node p($argument = null, ...$arguments)
 * @method  static Node param($argument = null, ...$arguments)
 * @method  static Node picture($argument = null, ...$arguments)
 * @method  static Node pre($argument = null, ...$arguments)
 * @method  static Node progress($argument = null, ...$arguments)
 * @method  static Node q($argument = null, ...$arguments)
 * @method  static Node rp($argument = null, ...$arguments)
 * @method  static Node rt($argument = null, ...$arguments)
 * @method  static Node ruby($argument = null, ...$arguments)
 * @method  static Node s($argument = null, ...$arguments)
 * @method  static Node samp($argument = null, ...$arguments)
 * @method  static Node script($argument = null, ...$arguments)
 * @method  static Node section($argument = null, ...$arguments)
 * @method  static Node select($argument = null, ...$arguments)
 * @method  static Node small($argument = null, ...$arguments)
 * @method  static Node source($argument = null, ...$arguments)
 * @method  static Node span($argument = null, ...$arguments)
 * @method  static Node strong($argument = null, ...$arguments)
 * @method  static Node style($argument = null, ...$arguments)
 * @method  static Node sub($argument = null, ...$arguments)
 * @method  static Node summary($argument = null, ...$arguments)
 * @method  static Node sup($argument = null, ...$arguments)
 * @method  static Node table($argument = null, ...$arguments)
 * @method  static Node tbody($argument = null, ...$arguments)
 * @method  static Node td($argument = null, ...$arguments)
 * @method  static Node textarea($argument = null, ...$arguments)
 * @method  static Node tfoot($argument = null, ...$arguments)
 * @method  static Node th($argument = null, ...$arguments)
 * @method  static Node thead($argument = null, ...$arguments)
 * @method  static Node time($argument = null, ...$arguments)
 * @method  static Node title($argument = null, ...$arguments)
 * @method  static Node tr($argument = null, ...$arguments)
 * @method  static Node track($argument = null, ...$arguments)
 * @method  static Node u($argument = null, ...$arguments)
 * @method  static Node ul($argument = null, ...$arguments)
 * @method  static Node var($argument = null, ...$arguments)
 * @method  static Node video($argument = null, ...$arguments)
 * @method  static Node wbr($argument = null, ...$arguments)
 */
abstract class Html
{
    use Special;

    /**
     *  Static over loader
     *
     * @param  string $name
     * @param  array  $arguments
     * @return Node
     * @throws InvalidArgumentException
     */
    public  static function __callStatic($name, $arguments)
    {
        if (Element::isElement($name)) {
            return new Node($name, $arguments, Element::isVoid($name));
        }

        throw new InvalidArgumentException('Method [' . $name . '] does not exist in context [' . self::class . '].');
    }
}
