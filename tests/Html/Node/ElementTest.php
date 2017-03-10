<?php

namespace BestServedCold\HTMLBuilder\Html\Node;

use BestServedCold\HTMLBuilder\TestCase;

class ElementTest extends TestCase
{
    public function testIsVoid()
    {
        $this->assertTrue(Element::isVoid('input'));
        $this->assertFalse(Element::isVoid('div'));
    }

    public function testIsElement()
    {
        $this->assertTrue(Element::isElement('div'));
        $this->assertFalse(Element::isElement('ThisIsDefinitely not a ******* element'));
    }
}
