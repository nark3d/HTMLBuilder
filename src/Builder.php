<?php

namespace BestServedCold\HTMLBuilder;

/**
 * Class Tag
 *
 * @package BestServedCold\Benchmark\Output\Html
 * @method static $this a
 * @method static $this abbr
 * @method static $this address
 * @method static $this area
 * @method static $this article
 * @method static $this aside
 * @method static $this audio
 * @method static $this b
 * @method static $this base
 * @method static $this bdi
 * @method static $this bdo
 * @method static $this blockquote
 * @method static $this body
 * @method static $this br
 * @method static $this button
 * @method static $this canvas
 * @method static $this caption
 * @method static $this cite
 * @method statid $this code
 * @method static $this col
 * @method static $this colgroup
 * @method static $this datalist
 * @method static $this dd
 * @method static $this del
 * @method static $this details
 * @method static $this dfn
 * @method static $this dialog
 * @method static $this div
 * @method static $this dl
 * @method static $this dt
 * @method static $this em
 * @method static $this embed
 * @method static $this fieldset
 * @method static $this figcaption
 * @method static $this figure
 * @method static $this footer
 * @method static $this form
 * @method static $this h1
 * @method static $this h2
 * @method static $this h3
 * @method static $this h4
 * @method static $this h5
 * @method static $this h6
 * @method static $this head
 * @method static $this header
 * @method static $this hr
 * @method static $this html
 * @method static $this i
 * @method static $this iframe
 * @method static $this img
 * @method static $this input
 * @method static $this ins
 * @method static $this kbd
 * @method static $this keygen
 * @method static $this label
 * @method static $this legend
 * @method static $this li
 * @method static $this link
 * @method static $this main
 * @method static $this map
 * @method static $this mark
 * @method static $this menu
 * @method static $this menuitem
 * @method static $this meta
 * @method static $this meter
 *  @method static $this nav
 *  @method static $this noscript
 *  @method static $this object
 *  @method static $this ol
 * @method static $this optgroup
 *  @method static $this option
 *  @method static $this output
 *  @method static $this p
 *  @method static $this param
 *  @method static $this picture
 * @method static $this pre
 *  @method static $this progress
 *  @method static $this q
 *  @method static $this rp
 *  @method static $this rt
 *  @method static $this ruby
 *  @method static $this s
 *  @method static $this samp
 *  @method static $this script
 * @method static $this section
 *  @method static $this select
 * @method static $this small
 * @method static $this source
 *  @method static $this span
 * @method static $this strong
 *  @method static $this style
 * @method static $this sub
 * @method static $this summary
 * @method static $this sup
 * @method static $this table
 * @method static $this tbody
 * @method static $this td
 * @method static $this textarea
 *  @method static $this tfoot
 * @method static $this th
 * @method static $this thead
 *  @method static $this time
 * @method static $this title
 * @method static $this tr
 * @method static $this track
 * @method static $this u
 *  @method static $this ul
 *  @method static $this var
 * @method static $this video
 *  @method static $this wbr
 * @method static $this
 */
class Builder extends Element
{
    /**
     * @var array
     */
    private static $elements = [
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
     * @var array
     */
    private static $voidElements = [
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
     * @param  $name
     * @param  $arguments
     * @throws \Exception
     * @return Element
     */
    public static function __callStatic($name, $arguments)
    {
        if (in_array($name, self::$elements)) {
            return self::voidTag($name) ? Element::add($name)->void() : Element::add($name);
        }

        throw new \Exception('Method [' . $name . '] does not exist in context [' . static::class . '].');
    }

    /**
     * @param  null    $value
     * @return Element
     */
    public static function comment($value = null)
    {
        return (new Element('!--' . $value . '--'))->void();
    }

    /**
     * @param  null    $value
     * @return Element
     */
    public static function doctype($value = null)
    {
        return (new Element('!DOCTYPE'))->attribute($value = $value ?: 'html')->void();
    }

    /**
     * @param  $name
     * @return bool
     */
    private static function voidTag($name)
    {
        return in_array($name, self::$voidElements);
    }
}
 

