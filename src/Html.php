<?php

namespace BestServedCold\HTMLBuilder;

use BestServedCold\HTMLBuilder\Html\Node,
    BestServedCold\HTMLBuilder\Html\Special,
    InvalidArgumentException;

/**
 * Class Html
 *
 * @package BestServedCold\HTMLBuilder
 * @method  static Node a(...$arguments)
 * @method  static Node abbr(...$arguments)
 * @method  static Node address(...$arguments)
 * @method  static Node area(...$arguments)
 * @method  static Node article(...$arguments)
 * @method  static Node aside(...$arguments)
 * @method  static Node audio(...$arguments)
 * @method  static Node b(...$arguments)
 * @method  static Node base(...$arguments)
 * @method  static Node bdi(...$arguments)
 * @method  static Node bdo(...$arguments)
 * @method  static Node blockquote(...$arguments)
 * @method  static Node body(...$arguments)
 * @method  static Node br(...$arguments)
 * @method  static Node button(...$arguments)
 * @method  static Node canvas(...$arguments)
 * @method  static Node caption(...$arguments)
 * @method  static Node cite(...$arguments)
 * @method  static Node code(...$arguments)
 * @method  static Node col(...$arguments)
 * @method  static Node colgroup(...$arguments)
 * @method  static Node datalist(...$arguments)
 * @method  static Node dd(...$arguments)
 * @method  static Node del(...$arguments)
 * @method  static Node details(...$arguments)
 * @method  static Node dfn(...$arguments)
 * @method  static Node dialog(...$arguments)
 * @method  static Node div(...$arguments)
 * @method  static Node dl(...$arguments)
 * @method  static Node dt(...$arguments)
 * @method  static Node em(...$arguments)
 * @method  static Node embed(...$arguments)
 * @method  static Node fieldset(...$arguments)
 * @method  static Node figcaption(...$arguments)
 * @method  static Node figure(...$arguments)
 * @method  static Node footer(...$arguments)
 * @method  static Node form(...$arguments)
 * @method  static Node h1(...$arguments)
 * @method  static Node h2(...$arguments)
 * @method  static Node h3(...$arguments)
 * @method  static Node h4(...$arguments)
 * @method  static Node h5(...$arguments)
 * @method  static Node h6(...$arguments)
 * @method  static Node head(...$arguments)
 * @method  static Node header(...$arguments)
 * @method  static Node hr(...$arguments)
 * @method  static Node html(...$arguments)
 * @method  static Node i(...$arguments)
 * @method  static Node iframe(...$arguments)
 * @method  static Node img(...$arguments)
 * @method  static Node input(...$arguments)
 * @method  static Node ins(...$arguments)
 * @method  static Node kbd(...$arguments)
 * @method  static Node keygen(...$arguments)
 * @method  static Node label(...$arguments)
 * @method  static Node legend(...$arguments)
 * @method  static Node li(...$arguments)
 * @method  static Node link(...$arguments)
 * @method  static Node main(...$arguments)
 * @method  static Node map(...$arguments)
 * @method  static Node mark(...$arguments)
 * @method  static Node menu(...$arguments)
 * @method  static Node menuitem(...$arguments)
 * @method  static Node meta(...$arguments)
 * @method  static Node meter(...$arguments)
 * @method  static Node nav(...$arguments)
 * @method  static Node noscript(...$arguments)
 * @method  static Node object(...$arguments)
 * @method  static Node ol(...$arguments)
 * @method  static Node optgroup(...$arguments)
 * @method  static Node option(...$arguments)
 * @method  static Node output(...$arguments)
 * @method  static Node p(...$arguments)
 * @method  static Node param(...$arguments)
 * @method  static Node picture(...$arguments)
 * @method  static Node pre(...$arguments)
 * @method  static Node progress(...$arguments)
 * @method  static Node q(...$arguments)
 * @method  static Node rp(...$arguments)
 * @method  static Node rt(...$arguments)
 * @method  static Node ruby(...$arguments)
 * @method  static Node s(...$arguments)
 * @method  static Node samp(...$arguments)
 * @method  static Node script(...$arguments)
 * @method  static Node section(...$arguments)
 * @method  static Node select(...$arguments)
 * @method  static Node small(...$arguments)
 * @method  static Node source(...$arguments)
 * @method  static Node span(...$arguments)
 * @method  static Node strong(...$arguments)
 * @method  static Node style(...$arguments)
 * @method  static Node sub(...$arguments)
 * @method  static Node summary(...$arguments)
 * @method  static Node sup(...$arguments)
 * @method  static Node table(...$arguments)
 * @method  static Node tbody(...$arguments)
 * @method  static Node td(...$arguments)
 * @method  static Node textarea(...$arguments)
 * @method  static Node tfoot(...$arguments)
 * @method  static Node th(...$arguments)
 * @method  static Node thead(...$arguments)
 * @method  static Node time(...$arguments)
 * @method  static Node title(...$arguments)
 * @method  static Node tr(...$arguments)
 * @method  static Node track(...$arguments)
 * @method  static Node u(...$arguments)
 * @method  static Node ul(...$arguments)
 * @method  static Node var(...$arguments)
 * @method  static Node video(...$arguments)
 * @method  static Node wbr(...$arguments)
 */
abstract class Html
{
    use Special;
    
    /**
     * @var array $elements
     */
    private  static $elements = [
        'a',
        'abbr',
        'address',
        'area',
        'article',
        'aside',
        'audio',
        'b',
        'base',
        'bdi',
        'bdo',
        'blockquote',
        'body',
        'br',
        'button',
        'canvas',
        'caption',
        'cite',
        'code',
        'col',
        'colgroup',
        'datalist',
        'dd',
        'del',
        'details',
        'dfn',
        'dialog',
        'div',
        'dl',
        'dt',
        'em',
        'embed',
        'fieldset',
        'figcaption',
        'figure',
        'footer',
        'form',
        'h1',
        'h2',
        'h3',
        'h4',
        'h5',
        'h6',
        'head',
        'header',
        'hr',
        'html',
        'i',
        'iframe',
        'img',
        'input',
        'ins',
        'kbd',
        'keygen',
        'label',
        'legend',
        'li',
        'link',
        'main',
        'map',
        'mark',
        'menu',
        'menuitem',
        'meta',
        'meter',
        'nav',
        'noscript',
        'object',
        'ol',
        'optgroup',
        'option',
        'output',
        'p',
        'param',
        'picture',
        'pre',
        'progress',
        'q',
        'rp',
        'rt',
        'ruby',
        's',
        'samp',
        'script',
        'section',
        'select',
        'small',
        'source',
        'span',
        'strong',
        'style',
        'sub',
        'summary',
        'sup',
        'table',
        'tbody',
        'td',
        'textarea',
        'tfoot',
        'th',
        'thead',
        'time',
        'title',
        'tr',
        'track',
        'u',
        'ul',
        'var',
        'video',
        'wbr'
    ];

    /**
     * @var array $voidElements
     */
    private  static $voidElements = [
        'area',
        'base',
        'br',
        'col',
        'command',
        'embed',
        'hr',
        'img',
        'input',
        'keygen',
        'link',
        'meta',
        'param',
        'source',
        'track',
        'wbr'
    ];
    
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
        if (in_array($name, self::$elements)) {
            return new Node($name, $arguments, in_array($name, self::$voidElements));
        }

        throw new InvalidArgumentException('Method [' . $name . '] does not exist in context [' . self::class . '].');
    }
}
