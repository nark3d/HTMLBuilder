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
 * @method  static Node a(null|array|\Closure|Node ...$arguments)
 * @method  static Node abbr(null|array|\Closure|Node ...$arguments)
 * @method  static Node address(null|array|\Closure|Node ...$arguments)
 * @method  static Node area(null|array|\Closure|Node ...$arguments)
 * @method  static Node article(null|array|\Closure|Node ...$arguments)
 * @method  static Node aside(null|array|\Closure|Node ...$arguments)
 * @method  static Node audio(null|array|\Closure|Node ...$arguments)
 * @method  static Node b(null|array|\Closure|Node ...$arguments)
 * @method  static Node base(null|array|\Closure|Node ...$arguments)
 * @method  static Node bdi(null|array|\Closure|Node ...$arguments)
 * @method  static Node bdo(null|array|\Closure|Node ...$arguments)
 * @method  static Node blockquote(null|array|\Closure|Node ...$arguments)
 * @method  static Node body(null|array|\Closure|Node ...$arguments)
 * @method  static Node br(null|array|\Closure|Node ...$arguments)
 * @method  static Node button(null|array|\Closure|Node ...$arguments)
 * @method  static Node canvas(null|array|\Closure|Node ...$arguments)
 * @method  static Node caption(null|array|\Closure|Node ...$arguments)
 * @method  static Node cite(null|array|\Closure|Node ...$arguments)
 * @method  static Node code(null|array|\Closure|Node ...$arguments)
 * @method  static Node col(null|array|\Closure|Node ...$arguments)
 * @method  static Node colgroup(null|array|\Closure|Node ...$arguments)
 * @method  static Node datalist(null|array|\Closure|Node ...$arguments)
 * @method  static Node dd(null|array|\Closure|Node ...$arguments)
 * @method  static Node del(null|array|\Closure|Node ...$arguments)
 * @method  static Node details(null|array|\Closure|Node ...$arguments)
 * @method  static Node dfn(null|array|\Closure|Node ...$arguments)
 * @method  static Node dialog(null|array|\Closure|Node ...$arguments)
 * @method  static Node div(null|array|\Closure|Node ...$arguments)
 * @method  static Node dl(null|array|\Closure|Node ...$arguments)
 * @method  static Node dt(null|array|\Closure|Node ...$arguments)
 * @method  static Node em(null|array|\Closure|Node ...$arguments)
 * @method  static Node embed(null|array|\Closure|Node ...$arguments)
 * @method  static Node fieldset(null|array|\Closure|Node ...$arguments)
 * @method  static Node figcaption(null|array|\Closure|Node ...$arguments)
 * @method  static Node figure(null|array|\Closure|Node ...$arguments)
 * @method  static Node footer(null|array|\Closure|Node ...$arguments)
 * @method  static Node form(null|array|\Closure|Node ...$arguments)
 * @method  static Node h1(null|array|\Closure|Node ...$arguments)
 * @method  static Node h2(null|array|\Closure|Node ...$arguments)
 * @method  static Node h3(null|array|\Closure|Node ...$arguments)
 * @method  static Node h4(null|array|\Closure|Node ...$arguments)
 * @method  static Node h5(null|array|\Closure|Node ...$arguments)
 * @method  static Node h6(null|array|\Closure|Node ...$arguments)
 * @method  static Node head(null|array|\Closure|Node ...$arguments)
 * @method  static Node header(null|array|\Closure|Node ...$arguments)
 * @method  static Node hr(null|array|\Closure|Node ...$arguments)
 * @method  static Node html(null|array|\Closure|Node ...$arguments)
 * @method  static Node i(null|array|\Closure|Node ...$arguments)
 * @method  static Node iframe(null|array|\Closure|Node ...$arguments)
 * @method  static Node img(null|array|\Closure|Node ...$arguments)
 * @method  static Node input(null|array|\Closure|Node ...$arguments)
 * @method  static Node ins(null|array|\Closure|Node ...$arguments)
 * @method  static Node kbd(null|array|\Closure|Node ...$arguments)
 * @method  static Node keygen(null|array|\Closure|Node ...$arguments)
 * @method  static Node label(null|array|\Closure|Node ...$arguments)
 * @method  static Node legend(null|array|\Closure|Node ...$arguments)
 * @method  static Node li(null|array|\Closure|Node ...$arguments)
 * @method  static Node link(null|array|\Closure|Node ...$arguments)
 * @method  static Node main(null|array|\Closure|Node ...$arguments)
 * @method  static Node map(null|array|\Closure|Node ...$arguments)
 * @method  static Node mark(null|array|\Closure|Node ...$arguments)
 * @method  static Node menu(null|array|\Closure|Node ...$arguments)
 * @method  static Node menuitem(null|array|\Closure|Node ...$arguments)
 * @method  static Node meta(null|array|\Closure|Node ...$arguments)
 * @method  static Node meter(null|array|\Closure|Node ...$arguments)
 * @method  static Node nav(null|array|\Closure|Node ...$arguments)
 * @method  static Node noscript(null|array|\Closure|Node ...$arguments)
 * @method  static Node object(null|array|\Closure|Node ...$arguments)
 * @method  static Node ol(null|array|\Closure|Node ...$arguments)
 * @method  static Node optgroup(null|array|\Closure|Node ...$arguments)
 * @method  static Node option(null|array|\Closure|Node ...$arguments)
 * @method  static Node output(null|array|\Closure|Node ...$arguments)
 * @method  static Node p(null|array|\Closure|Node ...$arguments)
 * @method  static Node param(null|array|\Closure|Node ...$arguments)
 * @method  static Node picture(null|array|\Closure|Node ...$arguments)
 * @method  static Node pre(null|array|\Closure|Node ...$arguments)
 * @method  static Node progress(null|array|\Closure|Node ...$arguments)
 * @method  static Node q(null|array|\Closure|Node ...$arguments)
 * @method  static Node rp(null|array|\Closure|Node ...$arguments)
 * @method  static Node rt(null|array|\Closure|Node ...$arguments)
 * @method  static Node ruby(null|array|\Closure|Node ...$arguments)
 * @method  static Node s(null|array|\Closure|Node ...$arguments)
 * @method  static Node samp(null|array|\Closure|Node ...$arguments)
 * @method  static Node script(null|array|\Closure|Node ...$arguments)
 * @method  static Node section(null|array|\Closure|Node ...$arguments)
 * @method  static Node select(null|array|\Closure|Node ...$arguments)
 * @method  static Node small(null|array|\Closure|Node ...$arguments)
 * @method  static Node source(null|array|\Closure|Node ...$arguments)
 * @method  static Node span(null|array|\Closure|Node ...$arguments)
 * @method  static Node strong(null|array|\Closure|Node ...$arguments)
 * @method  static Node style(null|array|\Closure|Node ...$arguments)
 * @method  static Node sub(null|array|\Closure|Node ...$arguments)
 * @method  static Node summary(null|array|\Closure|Node ...$arguments)
 * @method  static Node sup(null|array|\Closure|Node ...$arguments)
 * @method  static Node table(null|array|\Closure|Node ...$arguments)
 * @method  static Node tbody(null|array|\Closure|Node ...$arguments)
 * @method  static Node td(null|array|\Closure|Node ...$arguments)
 * @method  static Node textarea(null|array|\Closure|Node ...$arguments)
 * @method  static Node tfoot(null|array|\Closure|Node ...$arguments)
 * @method  static Node th(null|array|\Closure|Node ...$arguments)
 * @method  static Node thead(null|array|\Closure|Node ...$arguments)
 * @method  static Node time(null|array|\Closure|Node ...$arguments)
 * @method  static Node title(null|array|\Closure|Node ...$arguments)
 * @method  static Node tr(null|array|\Closure|Node ...$arguments)
 * @method  static Node track(null|array|\Closure|Node ...$arguments)
 * @method  static Node u(null|array|\Closure|Node ...$arguments)
 * @method  static Node ul(null|array|\Closure|Node ...$arguments)
 * @method  static Node var(null|array|\Closure|Node ...$arguments)
 * @method  static Node video(null|array|\Closure|Node ...$arguments)
 * @method  static Node wbr(null|array|\Closure|Node ...$arguments)
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
