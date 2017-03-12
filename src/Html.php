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
 * @method  static Node a(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node abbr(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node address(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node area(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node article(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node aside(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node audio(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node b(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node base(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node bdi(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node bdo(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node blockquote(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node body(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node br(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node button(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node canvas(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node caption(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node cite(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node code(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node col(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node colgroup(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node datalist(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node dd(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node del(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node details(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node dfn(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node dialog(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node div(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node dl(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node dt(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node em(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node embed(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node fieldset(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node figcaption(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node figure(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node footer(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node form(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node h1(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node h2(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node h3(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node h4(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node h5(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node h6(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node head(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node header(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node hr(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node html(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node i(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node iframe(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node img(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node input(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node ins(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node kbd(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node keygen(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node label(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node legend(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node li(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node link(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node main(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node map(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node mark(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node menu(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node menuitem(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node meta(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node meter(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node nav(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node noscript(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node object(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node ol(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node optgroup(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node option(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node output(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node p(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node param(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node picture(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node pre(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node progress(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node q(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node rp(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node rt(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node ruby(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node s(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node samp(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node script(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node section(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node select(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node small(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node source(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node span(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node strong(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node style(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node sub(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node summary(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node sup(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node table(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node tbody(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node td(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node textarea(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node tfoot(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node th(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node thead(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node time(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node title(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node tr(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node track(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node u(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node ul(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node var(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node video(false|null|array|\Closure|Node ...$arguments)
 * @method  static Node wbr(false|null|array|\Closure|Node ...$arguments)
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
